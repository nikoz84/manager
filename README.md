# The Manager

This package is for assistance project managers and automating boring tasks.

## Installation laravel dependencies

```bash
composer install
```

## Supabase PostgreSQL with PGVector extension

Configure the `.env` file to allow the connection to the PostgreSQL database.

```bash
cp .env.example .env
```

## Run laravel migrations

```bash
php artisan migrate
```

## Install Ollama Server on Linux

Download and run the following command to install Ollama Server.

```bash
curl -fsSL https://ollama.com/install.sh | sh
```

Ollama server is now installed and running.

### Ollama Server version

```bash
ollama -v
```

### Download a model

```bash
ollama pull llama3.1:8b
```

List all the installed models

```bash
ollama list
```

Presentation of a models in a table list

| NAME        | ID           | SIZE   | MODIFIED   |
| ----------- | ------------ | ------ | ---------- |
| llama3.1:8b | 42182419e950 | 4.7 GB | 6 days ago |

All the models run on memory and they are expensive in terms of computation resources (Memory and CPU).

### Run a model

```bash
ollama run llama3.1:8b
```

Now you can chat with your model in real-time.

### Ollama Server Commands `ollama --help or -h`

Available Commands:

| Command | Description |
|---|---|
| serve | Start ollama |
| create | Create a model from a Modelfile |
| show | Show information for a model |
| run | Run a model |
| pull | Pull a model from a registry |
| push | Push a model to a registry |
| list | List models |
| ps | List running models |
| cp | Copy a model |
| rm | Remove a model |
| help | Help about any command |

### How Ollama works

Ollama is an open-source project that makes it easy to set up and run large language models (LLMs) locally on your machine.
Here's an overview of how the Ollama service works:

`Local Deployment`:

Ollama allows you to run AI models on your own hardware, which means you don't need to rely on cloud services. This can be beneficial for privacy, cost, and customization reasons.

`Model Management`:

Ollama simplifies the process of downloading, installing, and managing different AI models. It supports various models like Llama 2, GPT-J, and others.

`API Server`:

When you run Ollama, it starts a local API server (typically on port `11434`). This server acts as an interface between your applications and the AI models.

`RESTful API`:

Ollama exposes a RESTful API that allows you to interact with the models. The main endpoints include:

- `/api/generate`: *For text generation*

- `/api/chat`: *For chat-based interactions*

- `/api/embeddings`: *For generating text embeddings*

`Model Loading`:

When you make a request, Ollama loads the specified model into `memory` if it's not already loaded. This allows for efficient use of system resources.

`Text Generation`:

For text generation tasks, Ollama uses the loaded model to process your prompt and generate a response. This happens entirely on your local machine.

`Streaming Responses`:

Ollama supports streaming responses, which means it can send back generated text in real-time as it's being produced by the model.

`Model Customization`:

Ollama allows for some level of model customization through `Modelfiles`, which let you define specific parameters or fine-tuning for models.

`CLI and GUI`:

While Ollama primarily operates as a service, it also provides a command-line interface (CLI) for management tasks and can be used with various GUI applications built by the community.

`Language Support`:

The Ollama service itself is language-agnostic. It can be accessed from any programming language that can make HTTP requests, which is why we were able to interact with it using PHP in our previous examples.

When you use Ollama, the typical flow is:

- Start the Ollama service on your machine.
- Your application sends a request to the Ollama API (e.g., for text generation).
- Ollama loads the appropriate model if it's not already in memory.
- The model processes your request locally.
- Ollama streams the response back to your application.

This local processing approach offers low latency and high privacy, as your data never leaves your machine. However, it does require more powerful hardware compared to using cloud-based AI services, especially for larger models.

## Play with the command line and CURL

You can query and test the API server using CURL.

```bash
curl http://localhost:11434/api/generate -d '{
  "model": "llama3.1:8b",
  "prompt": "Why is the sky blue?",
  "stream": true
}'
```

Without streaming:

```bash
curl http://localhost:11434/api/generate -d '{
  "model": "llama3",
  "prompt": "Why is the sky blue?",
  "stream": false
}'
```
