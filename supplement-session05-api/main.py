# 1. Library imports
import torch
from transformers import AutoTokenizer, AutoModelForSequenceClassification
from transformers import pipeline
import uvicorn
from fastapi import FastAPI
from Credit import Credit
import numpy as np
import pickle
import pandas as pd


# 2. Create the app object
app = FastAPI()


# Jalankan Program dengan : uvicorn main:app --reload --port=9090
@app.get('/')
def index():
    return {'message': 'Welcome to Web Programming'}

# Sentiment Analysis
# https://huggingface.co/mdhugol/indonesia-bert-sentiment-classification
pretrained = "mdhugol/indonesia-bert-sentiment-classification"
model = AutoModelForSequenceClassification.from_pretrained(pretrained)
tokenizer = AutoTokenizer.from_pretrained(pretrained)
sentiment_analysis = pipeline("sentiment-analysis", model=model, tokenizer=tokenizer)

@app.post('/sentiment')
def classify_sentiment(pos_text):
    result = sentiment_analysis(pos_text)
    label_index = {'LABEL_0': 'positive',
                   'LABEL_1': 'neutral', 'LABEL_2': 'negative'}

    status = label_index[result[0]['label']]
    score = result[0]['score']
    # print('===> pos_text', pos_text)

    return {
        "msg": pos_text,
        # "predict": status
        "predict": status,
        "score": score
    }


# Credt Scoring
pickle_in = open("Model1.pkl", "rb")
classifier = pickle.load(pickle_in)
# Spam Or Hama Classifier
pickle_in1 = open("Model2.pkl", "rb")
classifier2 = pickle.load(pickle_in1)
# Vectorizer Spam or ham
pickle_in2 = open("Vectorizer.pkl", "rb")
vectorizer = pickle.load(pickle_in2)

@app.post('/predict')
def predict_CreditScore(data: Credit):
    data = data.dict()
    RevolvingUtilizationOfUnsecuredLines = data['RevolvingUtilizationOfUnsecuredLines']
    age = data['age']
    NumberOfTime30to59DaysPastDueNotWorse = data['NumberOfTime30to59DaysPastDueNotWorse']
    DebtRatio = data['DebtRatio']
    MonthlyIncome = data['MonthlyIncome']
    NumberOfOpenCreditLinesAndLoans = data['NumberOfOpenCreditLinesAndLoans']
    NumberOfTimes90DaysLate = data['NumberOfTimes90DaysLate']
    NumberRealEstateLoansOrLines = data['NumberRealEstateLoansOrLines']
    NumberOfTime60to89DaysPastDueNotWorse = data['NumberOfTime60to89DaysPastDueNotWorse']
    NumberOfDependents = data['NumberOfDependents']

    prediction = classifier.predict([[RevolvingUtilizationOfUnsecuredLines, age, NumberOfTime30to59DaysPastDueNotWorse, DebtRatio, MonthlyIncome,
                                    NumberOfOpenCreditLinesAndLoans, NumberOfTimes90DaysLate, NumberRealEstateLoansOrLines, NumberOfTime60to89DaysPastDueNotWorse, NumberOfDependents]])
    #print(classifier.predict([[RevolvingUtilizationOfUnsecuredLines, age, NumberOfTime30to59DaysPastDueNotWorse, DebtRatio, MonthlyIncome, NumberOfOpenCreditLinesAndLoans, NumberOfTimes90DaysLate, NumberRealEstateLoansOrLines, NumberOfTime60to89DaysPastDueNotWorse, NumberOfDependents]]))
    if(prediction[0] > 0.8):
        prediction = "Loan"
    else:
        prediction = "No Loan"
    return {
        'prediction': prediction
    }


@app.get('/Get_The_Word')
async def Get_Word(Word):
    return {'Word': Word}


@app.get('/spam_detection_path')
def classify_message(Word):
    vectorized_word = vectorizer.transform([Word]).toarray()
    prediction = classifier2.predict(vectorized_word)

    if prediction[0] == 0:
        prediction = "No Spam"
    else:
        prediction = "Spam"
    return {
        "original message": Word,
        "prediction": prediction
    }


if __name__ == "__main__":
    uvicorn.run(main, host="0.0.0.0", port=9090)


# uvicorn app:app --reload
