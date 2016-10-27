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

class Auditoria
{

  public function gravaLog($conteudo){
        $fp = null;
        $arquivo = 'C:\temp\teste2.txt';
        if(!file_exists($arquivo))
        {
            echo "Arquivo não existe no diretório marcado";
        }
        $fp = fopen($arquivo, 'a');
        $counteudo =+ $this->pulaLinha();
        fwrite($fp, $conteudo);
        fclose($fp);
    }

    public function lerArquivoLog(){
        //Definindo o ponteiro para o arquivo
        $ponteiro = fopen("C:\\temp\\teste2.txt", "r");

        //Abre o aruqivo .txt
        while(!feof($ponteiro)) {
            $linha = fgets($ponteiro, 4096);
            //Imprime na tela o resultado
            $this->pulaLinha();
        }
        //Fecha o arquivo
        fclose($ponteiro);
    }

    public function pulaLinha(){
        echo "<br>";
    }  public function gravandoLog($textoLog)
    {
        $this->load->model('Auditoria_model');
        $dadosLogin = array(
            'loghora' => time(),
            'logdata' => date('y-m-d'),
            'logtexto' => $textoLog
        );
        $this->Auditoria_model->logar($dadosLogin);
    }
}
