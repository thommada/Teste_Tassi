# Descrição (Teste_Tassi)
    • Teste para seleção do Estágio na Tassi.
    • Linguagem: PHP
    • Banco de Dados: MySQL

# Regras
    • Prazo de sete dias corridos a partir do envio do teste. Após o término do prazo, pode-se submeter o código mesmo que incompleto.
    • O sistema deve ser feito na linguagem PHP e com o banco de dados MySQL.
    • Mandar o código com os scripts de criação de banco de dados e tabelas para nossa análise.
    • Pode hospedar em um lugar gratuito para acessarmos.

# Diferencial
    • Estrutura do projeto em MVC.

# Objetivo:
    Desenvolver um sistema de controle de alunos de uma escola. O sistema deverá conter as seguintes funcionalidades:
        • Código organizado, comentado e limpo.
        • Conter um pagina home com menus de navegação de cadastro e listar.
        • Dentro da lista em cada linha tem a opção de manutenção do registro com alterar e excluir.
        • Cadastro de alunos Abaixo os requisitos da funcionalidade:
            - Deve ter a listagem com busca, cadastro, edição e exclusão de aluno.
            - Campos: ID, nome, telefone, e-mail, data de nascimento e gênero.
            - Campos obrigatórios: Nome e E-mail.
            - Um aluno pode estar ligado a muitas turmas.
        • Cadastro de turmas Abaixo os requisitos da funcionalidade:
            - Deve ter a listagem com busca, cadastro, edição e exclusão das turmas.
            - Campos: Ano, nível de ensino (fundamental, médio), série e turno.
            - Uma turma deve estar ligada a uma escola.
        • Cadastro de escolas Abaixo os requisitos da funcionalidade:
            - Deve ter a listagem com busca, cadastro, edição e exclusão da escola.
            - Campos: ID, nome da escola, endereço.
            - Campos obrigatórios: ID, Data e Situação.
            - Uma escola deve:
                ◦ Ter várias turmas.
                ◦ Exibir o total de alunos.
# Tabelas Necessárias
    • Alunos
    • Turmas
    • Escolas
    • Alunos de Turmas

# Desenvolvimento #

# Modelos Definidos (* = Obrigatório)
    • Aluno
        - ID *
        - Nome Completo *
        - Data de Nascimento
        - Telefone
        - e-mail *
        - Gênero
    • Turma
        - ID *
        - Ano *
        - Nível de Ensino *
        - Série *
        - Turno *
    • Escola
        - ID *
        - Nome da Escola *
        - Endereço
        - Situação *

# Relações
    • Um aluno pode estar ligado a várias turmas
    • Uma turma deve estar ligada a uma escola
    • Uma escola deve ter várias turmas

# Funcionalidades
    • Aluno:
        - Busca
        - Cadastro
        - Edição
        - Exclusão
        
    • Turma:
        - Busca
        - Cadastro
        - Edição
        - Exclusão
        
        - Matrícular Aluno

    • Escola:
        - Busca
        - Cadastro
        - Edição
        - Exclusão

        - Exibir total de Alunos


