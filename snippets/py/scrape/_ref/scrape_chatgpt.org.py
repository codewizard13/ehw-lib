import openai
import json
import time

# Configure your OpenAI API key
API_KEY = "your-api-key-here"
HEADERS = {"Authorization": f"Bearer {API_KEY}", "Content-Type": "application/json"}

# Output file
OUTPUT_FILE = "results.md"

# Initialize output file with header
with open(OUTPUT_FILE, "w", encoding="utf-8") as f:
    f.write("""#####################
##
##    Merged Doc TOP
##
#####################

""")

def fetch_threads():
    """Fetch all conversation threads from OpenAI API."""
    url = "https://api.openai.com/v1/conversations"  # Adjust endpoint if needed
    response = openai.get(url, headers=HEADERS)
    if response.status_code == 200:
        return response.json().get("data", [])
    else:
        print("Error fetching threads:", response.text)
        return []

def fetch_messages(thread_id):
    """Fetch messages for a given thread."""
    url = f"https://api.openai.com/v1/conversations/{thread_id}/messages"
    response = openai.get(url, headers=HEADERS)
    if response.status_code == 200:
        return response.json().get("messages", [])
    else:
        print(f"Error fetching messages for thread {thread_id}:", response.text)
        return []

def append_to_markdown(thread):
    """Append a thread to the Markdown file."""
    thread_id = thread["id"]
    messages = fetch_messages(thread_id)
    
    with open(OUTPUT_FILE, "a", encoding="utf-8") as f:
        f.write(f"## Thread ID: {thread_id}\n\n")
        for msg in messages:
            role = msg["role"].capitalize()
            content = msg["content"]
            f.write(f"**{role}:**\n\n{content}\n\n---\n\n")
        f.write("##################### END THREAD #####################\n\n")

def main():
    """Main function to process all threads."""
    threads = fetch_threads()
    print(f"Fetched {len(threads)} threads.")
    
    for thread in threads:
        append_to_markdown(thread)
        time.sleep(1)  # Rate limiting safeguard

if __name__ == "__main__":
    main()
    print("Done! Merged conversations into results.md")
