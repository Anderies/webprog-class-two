# 1. Library imports
import uvicorn
from fastapi import FastAPI
from Credit import Credit
import numpy as np
import pickle
import pandas as pd
import torch
from torch import autocast
from diffusers import StableDiffusionPipeline

# 2. Create the app object
app = FastAPI()

# 3. Load Model
pipe = StableDiffusionPipeline.from_pretrained(
    'hakurei/waifu-diffusion',
    torch_dtype=torch.float32
).to('cuda')

@app.get('/')
def index():
    return {'message': 'Hello in Main Two'}

@app.post('/generate-image')
def generateImage(prompt):
    with autocast("cuda"):
        image = pipe(prompt, guidance_scale=6)["sample"][0]  
        image_generated = image.save("test.png")
    return image_generated
# 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