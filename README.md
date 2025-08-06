## Projeto de Paradigmas de linguagem de programação  

*Edilson Gomes*  
*Franciele Fernandes*  

### Um sistema de cadastro simples (produtos, usuários, livros, etc.)

# Relatório de Comparação entre Paradigmas: Imperativo vs POO em PHP

## Aplicação Desenvolvida
Criamos um sistema simples de cadastro de produtos que permite adicionar e listar itens com nome e preço.

## Paradigmas Utilizados

- **Imperativo (Procedural)**: Utiliza funções diretas que operam sobre arrays globais. Ideal para scripts curtos.
- **POO (Programação Orientada a Objetos)**: Usa classes para representar produtos e métodos para manipulação dos dados.

## Decisões de Implementação
Optamos por usar PHP em ambas as versões, por ser uma linguagem versátil e de fácil adaptação. No modelo imperativo, a estrutura é linear. No modelo POO, abstraímos entidades como `Produto` e `GerenciadorDeProdutos`.

## Análise Comparativa

| Aspecto                 | Imperativo                               | POO                                       |
|------------------------|--------------------------------------------|-------------------------------------------|
| Estilo de implementação| Direto, baseado em funções                 | Estruturado com objetos                   |
| Clareza                | Boa para código pequeno                   | Melhor para projetos maiores              |
| Complexidade           | Baixa em scripts simples                  | Melhora a organização em sistemas robustos|
| Custo Computacional    | Levemente mais leve                       | Pode incluir overhead de instanciamento   |
| Legibilidade           | Simples mas pode se tornar confuso        | Organização favorece leitura e manutenção |
| Estrutura Geral        | Funções e variáveis globais               | Classes com métodos bem definidos         |

## Conclusão
Ambos os paradigmas são úteis e funcionais. O imperativo é ágil em tarefas simples, enquanto POO se destaca na organização, escalabilidade e clareza em projetos maiores. O processo permitiu compreender melhor a importância de escolher o paradigma certo conforme o escopo da aplicação.
