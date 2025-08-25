from fastapi import FastAPI
from fastapi.middleware.cors import CORSMiddleware

# Initialize the app
app = FastAPI()

# --- CORS Middleware ---
# This is crucial for allowing your WordPress frontend
# to communicate with this backend server.
origins = [
    "http://catalyst-ai.local", # The domain of your WordPress site
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)
# --- End of CORS ---


# Define a "route" or "endpoint"
@app.get("/")
def read_root():
    return {"message": "Catalyst AI Backend is active"}

# Another example endpoint
@app.get("/api/test")
def get_test_message():
    return {"message": "This is a successful test from the API"}