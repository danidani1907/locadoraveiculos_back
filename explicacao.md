# funcionamento do sistema de locadora de veiculos com PHP e bootstrap

Este documento descreve o funcionamento do sistema de locadora de veiculos desenvolvido em php, utilizando bootstrap para a interface, com autenticação de usuarios, gerenciamento de veiculos e persistencia de dados em arquivo JSON. o foco principal é explicar o funcionamento geral do sistema, com ênfase especial nos perfis de acesso(admin e usuario).

## 1.Visão Geral do Sistema

O sistema de locadora de veiculos é uma apliacação web que permite:
- Autenticação de usuario com dois perfis **admin**(administrador) e **usuario** 
- Gerenciamento de veiculos: cadastro, aluguel, devolução e exclusão;
- Cálculo de previsão de aluguel: com base no tipo de veiculo (carro ou moto) e número de dias;
- interface responsiva

Os dados são armazendos em dois arquivos JSON:
- `usuario.json`: username, senha criptografada e perfil
- `veiculos.json` : tipo, modelo, placa e status de disponibilidade

## 2.Estrutura do sistema
O sistema utiliza:
 -  **PHP**: para a lógica
 - **Bootstrap**: para a estilização
 - **Bootstrap Icons**: para icones da interface
 - **Composer** : para autoloading de classes
 - **JSON** : para a persistencia de dados

 ### 2.1 Componentes principais

 - **Interfaces** : Define a interface `locavel` para veiculos e utiliza os metodos `alugar()`, `devolver()` e `isDisponivel()`
- **Models** : classes `veiculo` (abstrata), `carro` e `moto` para os veiculos, com calculo de aluguel baseado em diarias constantes (`DIARIA_CARRO` e `DIARIA_MOTO`)
- **services**: Classes `AUTH` (autenticação e gerenciamento de usuarios) e `Locadora` (gerenciamento dos veiculos)
- **Views** Template principal `template.php` para renderizar a interface e `login.php` para a autenticação
- **Controllers**: lógica em `index.php` para processar requisições e carregar o template
