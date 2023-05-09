import openai
import os

# Set the API key
openai.api_key = "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"

# Get the user's query from chatgpt_search.php
query = input("Enter your query: ")

# Use the GPT-3 API to perform the search
response = openai.Completion.create(
    engine="davinci",
    prompt=query,
    max_tokens=1024,
    n=1,
    stop=None,
    temperature=0.5,
)

# Get the search results
search_results = response.choices[0].text

# Save the search results to a file
with open("chatgpt_search_results.txt", "w") as f:
    f.write(search_results)

# Redirect to chatgpt_search_result.php
os.system("php chatgpt_search_result.php")
