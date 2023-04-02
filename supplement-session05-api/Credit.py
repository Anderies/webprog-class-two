from pydantic import BaseModel,Field
class Credit(BaseModel):
    RevolvingUtilizationOfUnsecuredLines  :float 
    age: int=Field(gt=16,description="Age Must Be Greater Than 16")
    NumberOfTime30to59DaysPastDueNotWorse:int 
    DebtRatio:  float
    MonthlyIncome: float   
    NumberOfOpenCreditLinesAndLoans:int   
    NumberOfTimes90DaysLate:int                  
    NumberRealEstateLoansOrLines:int  
    NumberOfTime60to89DaysPastDueNotWorse:int
    NumberOfDependents:float  