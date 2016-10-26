<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Ramon.
 * User: Usuario
 * Date: 14/10/2016
 * Time: 12:40
 * /**
 * Implementa o CURL e configura o endereço do webservice
 * de consulta o CEP.
 *
 * @author Ramon S. S.
 */

class LogArquivo
{


    public function gravar($texto)
    {

        //Variável arquivo armazena o nome e extensão do arquivo.

        $arquivo = 'c:\\temp\\info.txt';

        //Variável $fp armazena a conexão com o arquivo e o tipo de ação.

        $fp = fopen($arquivo, "b");

        fwrite($fp, $texto);
        //Fecha o arquivo.

        fclose($fp);

    }


}