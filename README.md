# MotoMania
Site ficticio para trabalho do professor Fabiano na faculdade

# CÓDIGOS MYSQL

CREATE DATABASE motomania;

USE motomania;

CREATE TABLE tb_cliente (
    cli_id BIGINT AUTO_INCREMENT PRIMARY KEY,
    cli_nome VARCHAR(100),
    cli_fone VARCHAR(15),
    cli_email VARCHAR(100)
)

CREATE TABLE tb_produtos(
    prod_id BIGINT AUTO_INCREMENT PRIMARY KEY,
    prod_nome VARCHAR(100),
    prod_valor DECIMAL (10,2),
    prod_qtde INT
)

## CONEXAO DO MYSQL PHP

Abra o conexap.php e preencha os campos para a conexão
