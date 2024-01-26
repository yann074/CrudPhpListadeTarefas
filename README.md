# Estagio UnMEP

**Foi desenvolvido um CRUD, feito para aplicar para vaga de Front-End UnMEP.**

# VAMOS LÁ

**O QUE VOCÊ IRÁ PRECISAR**

### XAMPP

1. **Baixar o XAMPP:**
   - Visite [o site oficial do XAMPP](https://www.apachefriends.org/index.html) e faça o download da versão adequada para o seu sistema operacional.

2. **Instalar o XAMPP:**
   - Siga as instruções de instalação fornecidas no site do XAMPP.

3. **Iniciar o XAMPP:**
   - Abra o XAMPP Control Panel e inicie os serviços necessários, como Apache e MySQL.

4. **Configurar o Apache:**
   - Coloque seus arquivos do projeto na pasta `htdocs` dentro do diretório de instalação do XAMPP.
  
5. **Criar uma Tabela:**
   - Crie um banco de dados com o nome "tarefas".
   - Crie uma tabela chamada "lista":

     ```sql
     CREATE TABLE lista (
         id INT PRIMARY KEY AUTO_INCREMENT,
         titulo VARCHAR(255),
         descricao VARCHAR(255),
         data_de_conc DATE,
         statuss INT
     );
     ```

6. **Acessar o phpMyAdmin:**
   - Abra um navegador web e vá para `http://localhost/estagio_01/index.php`.



