# Projeto de Paradigmas de Linguagens de Programação

**Autores:**  
- Edilson Gomes  
- Franciele Fernandes  

---
## 🎯 Objetivo

- Este projeto foi desenvolvido com o propósito de **comparar dois paradigmas de programação** — **Imperativo** e **Orientado a Objetos (POO)** — aplicados a um **sistema simples de cadastro de produtos**, utilizando a linguagem **PHP**.
- A ideia é demonstrar as principais diferenças entre os dois estilos por meio de exemplos práticos, destacando **estrutura de código**, **manutenção**, **escalabilidade** e **organização**.
---

## 📦 Funcionalidades

O sistema permite:

- ➕ Cadastrar novos produtos  
- 📋 Listar todos os produtos  
- 🔍 Buscar produto por ID  
- 🔄 Atualizar produto existente  
- ❌ Remover produto do cadastro  

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


## 🧠 Paradigmas Utilizados

### 🟡 Paradigma Imperativo

🔧 Baseado em **sequência de comandos**, **manipulação de variáveis globais** e uso de **funções isoladas**.

📁 Estrutura de código simples, com uso de `arrays` para armazenar dados.

🧩 Tudo é feito de forma procedural, sem uso de classes ou objetos.

#### 📷 Exemplo:



```php
$produtos = [];
function adicionarProduto(&$produtos, int $id, string $nome, float $preco): void {
    $produtos[$id] = ['id' => $id, 'nome' => $nome, 'preco' => $preco];
}
```

🟠 **Pontos positivos**:

- Mais rápido para pequenos scripts
- Fácil de entender inicialmente

🔴 **Limitações**:

- Dificuldade em manter e escalar o código
- Reutilização quase inexistente

---

### 🔵 Paradigma Orientado a Objetos (POO)

💡 Baseado em **classes**, **objetos**, **encapsulamento**, **modularização** e **abstração**.

📂 Os dados e comportamentos estão agrupados em classes como `Produto` e `GerenciadorProduto`.

#### 📷 Exemplo:


```php
class Produto {
    public function __construct(
        public int $id,
        public string $nome,
        public float $preco
    ) {}
}
```

🟢 **Vantagens**:

- Código mais organizado e reutilizável
- Mais fácil de testar, escalar e manter
- Abordagem profissional para sistemas maiores

🔵 **Desvantagens**:

- Curva de aprendizado um pouco maior
- Mais verboso para pequenos scripts

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
