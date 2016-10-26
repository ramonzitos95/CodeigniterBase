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


    function gravaLog($conteudo){
        $arquivo = 'C:\temp\teste2.txt';
        if(!file_exists($arquivo))
        {
            echo "Arquivo não existe no diretório marcado";
        }
        else
        {
            $fp = fopen($arquivo, 'a');
            fwrite($fp, $conteudo);
        }

        fclose($fp);
    }


    function lerArquivoLog(){




}