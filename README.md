# Projeto de Paradigmas de Linguagens de Programação

**Autores:**  
- Edilson Gomes  
- Franciele Fernandes  

## 📌 Descrição

Este projeto consiste na implementação de um sistema de cadastro simples — neste caso, de **produtos** — utilizando dois paradigmas distintos de programação:

- **Paradigma Imperativo**
- **Paradigma Orientado a Objetos (POO)**

O objetivo é comparar as abordagens em termos de estilo de implementação, complexidade, clareza, legibilidade, custo computacional e estrutura geral do código.

---

## 🧩 Funcionalidades do Sistema

- Cadastrar um novo produto
- Listar todos os produtos cadastrados
- Buscar produto por ID
- Atualizar informações de um produto
- Remover um produto

---

## 💡 Tecnologias Utilizadas

- Linguagem: **PHP 8+**

---

## 🧪 Estrutura do Projeto

```plaintext
Projeto_Paradigma/
│
├── p_imperativo/             # Implementação no paradigma imperativo
│   ├── index.php             # Script principal
│   └── Data/
│       └── produtos.php      # Funções relacionadas aos produtos
│
├── p_oo/                     # Implementação no paradigma orientado a objetos
│   ├── index.php             # Script de uso
│   ├── Produto.php           # Classe Produto
│   └── GerenciadorProduto.php # Classe responsável pela lógica de gerenciamento
│
└── README.md                 # Documentação do projeto
```

---

## 🔍 Comparação dos Paradigmas

| Critério              | Imperativo                                | POO                                           |
|-----------------------|--------------------------------------------|-----------------------------------------------|
| Estilo                | Uso direto de funções e arrays             | Uso de classes, objetos, encapsulamento       |
| Complexidade          | Baixa no início, difícil de escalar        | Levemente mais complexa, mas escalável        |
| Clareza               | Simples, mas pode gerar confusão           | Modular e mais clara em sistemas maiores      |
| Legibilidade          | Pode se perder com muitos `if` e arrays    | Alta legibilidade com boas práticas           |
| Estrutura             | Linear e procedural                        | Organizada e separada por responsabilidades   |
| Custo computacional   | Sem diferenças relevantes nesse projeto    | Sem diferenças relevantes nesse projeto       |

---

## 📄 Licença

Este projeto é de caráter acadêmico, desenvolvido como parte da disciplina de Paradigmas de Linguagens de Programação.