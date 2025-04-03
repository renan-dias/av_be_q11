# Avaliação Prática de Backend - Questão 11 - Prova 1

Este repositório contém o código para uma avaliação prática de backend, que consiste em um sistema PHP para o departamento de trânsito de uma cidade. O sistema inclui um formulário para inserir dados de multas e um script para gerar recibos.

## Enunciado

Você foi contratado para dar seguimento a um sistema utilizado pelo departamento de trânsito de sua cidade. O sistema foi desenvolvido em PHP e consiste em um frontend (arquivo `index.php`) que exibe um formulário para inserir dados da multa, e um backend (arquivo `processa.php`) que gera o recibo da multa aplicada.

Recentemente, de acordo com a Lei 404/2025, foi necessário que todos os sistemas relacionados também informassem a data da multa.

De acordo com a estrutura do código existente, implemente as seguintes alterações:

1.  Modifique o arquivo `index.php` para incluir um campo de data no formulário. Utilize a tag `<input>` com o atributo `type="date"` para criar um seletor de data. Não se esqueça de definir os atributos `id` e `name` adequados para o campo (o atributo `name` será usado no método POST).
2.  Modifique o arquivo `processa.php` para receber e exibir a data da multa no recibo gerado. Certifique-se de que a data seja exibida no formato correto, de acordo com a legislação.

**Dicas:**

* Na tag `<input>` do campo de data, utilize a propriedade `type="date"` para implementar um seletor de data.
* Não se esqueça de definir os atributos `id` e `name` (este campo é o usado no método POST) para o campo de data.
* Utilize a superglobal `$_POST` para acessar os dados enviados pelo formulário no arquivo `processa.php`.
* Formate a data no arquivo `processa.php` para exibição no recibo, se necessário.

## Instruções para Clonar o Repositório

Para clonar este repositório, siga as instruções abaixo:

1.  **Certifique-se de ter o Git instalado em sua máquina.** Caso contrário, você pode baixá-lo em [https://git-scm.com/downloads](https://git-scm.com/downloads).
2.  **Abra o terminal ou prompt de comando.**
3.  **Navegue até o diretório onde você deseja clonar o repositório.**
4.  **Execute o seguinte comando:**

    ```bash
    git clone https://github.com/renan-dias/av-be-q11-p1.git
    ```

    Ou se seu GIthub Desktop estiver configurado, vá em Clone > Open With Github Desktop

    Lembre-se de salvar em htdocs e depois selecione Open In Visual Studio Code

5.  **Após a conclusão do clone, navegue até o diretório do repositório:**

    ```bash
    cd [nome do repositório]
    ```

    Substitua `[nome do repositório]` pelo nome do diretório do repositório.

## Instruções para Executar o Código

1.  **Certifique-se de ter um servidor web com suporte a PHP instalado em sua máquina.** Você pode usar o XAMPP, WAMP ou outro servidor similar.
2.  **Copie os arquivos `index.php` e `processa.php` para o diretório raiz do seu servidor web.**
3.  **Abra um navegador web e acesse o arquivo `index.php` através do seu servidor web.** Por exemplo, se você estiver usando o XAMPP, o endereço pode ser `http://localhost/index.php`.
4.  **Preencha o formulário e clique em "Gerar Recibo".**
5.  **Verifique se a data da multa é exibida corretamente no recibo gerado.**

## Observações

* Você pode adicionar estilos CSS para melhorar a aparência do formulário e do recibo.
* Certifique-se de que o código PHP esteja livre de erros e siga as boas práticas de programação.
* Teste o sistema completo para garantir que a data da multa seja exibida corretamente no recibo.
