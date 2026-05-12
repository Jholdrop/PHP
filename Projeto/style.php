* {
    box-sizing: border-box;
}

:root {
    --bg: #ffffff;
    --card: #ffffff;
    --text: #1f2937;
    --muted: #6b7280;
    --line: #d6dde8;
    --primary: #0f62fe;
    --primary-hover: #0b53d0;
    --success-bg: #e6f7ed;
    --success-text: #0f5132;
    --danger-bg: #fde7e9;
    --danger-text: #842029;
}

body.tema-escuro {
    --bg: #1f2430;
    --card: #2a3040;
    --text: #f3f4f6;
    --muted: #c2c8d1;
    --line: #404a60;
    --primary: #3a8bfd;
    --primary-hover: #66a4ff;
    --success-bg: #123727;
    --success-text: #b8f7d1;
    --danger-bg: #4a1f24;
    --danger-text: #ffd4da;
}

body {
    margin: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--bg);
    color: var(--text);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    padding: 24px 12px;
}

.container {
    width: 100%;
    max-width: 760px;
    background-color: var(--card);
    border: 1px solid var(--line);
    border-radius: 14px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    padding: 22px;
}

.topo h1 {
    margin: 0 0 6px;
}

.topo p {
    margin: 0 0 16px;
    color: var(--muted);
}

.menu {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 14px;
}

.menu a {
    text-decoration: none;
    color: var(--primary);
    font-weight: 600;
}

.tema-links {
    margin-bottom: 12px;
    color: var(--muted);
}

.tema-links a {
    margin-left: 8px;
    text-decoration: none;
    color: var(--primary);
    font-weight: 600;
}

.badge-usuario {
    margin-bottom: 18px;
    padding: 8px 10px;
    border: 1px dashed var(--line);
    border-radius: 8px;
    color: var(--muted);
}

h2 {
    margin-top: 0;
}

label {
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
}

input,
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 14px;
    border: 1px solid var(--line);
    border-radius: 8px;
    background: #fff;
}

body.tema-escuro input,
body.tema-escuro select {
    background: #202636;
    color: #fff;
}

.checkbox-consentimento {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 14px;
    color: var(--muted);
}

.checkbox-consentimento input {
    width: auto;
    margin: 0;
}

.acoes {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

button {
    border: none;
    background: var(--primary);
    color: #fff;
    padding: 10px 14px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
}

button:hover {
    background: var(--primary-hover);
}

.secundario {
    background: #4b5563;
}

.mensagem {
    margin-bottom: 14px;
    padding: 10px 12px;
    border-radius: 8px;
}

.mensagem-sucesso {
    background: var(--success-bg);
    color: var(--success-text);
}

.mensagem-erro {
    background: var(--danger-bg);
    color: var(--danger-text);
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 12px;
}

th,
td {
    border: 1px solid var(--line);
    padding: 10px;
    text-align: left;
}

th {
    background: rgba(15, 98, 254, 0.12);
}

.rodape {
    margin-top: 22px;
    padding-top: 12px;
    border-top: 1px solid var(--line);
    color: var(--muted);
    font-size: 0.92rem;
}

@media (max-width: 600px) {
    .container {
        padding: 16px;
    }
}
