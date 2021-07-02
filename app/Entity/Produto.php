<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto{

    /**
     * Identificador Único do Produto
     * @var integer
    */ 
    public $idProduto;


    /**
     * Nome do Produto
     * @var string
    */ 
    public $nomeProduto;

    /**
     * Quantidade do Produto
     * @var string
    */ 
    public $quantidadeProduto;

    /**
     * Preço de Custo do Produto
     * @var string
    */ 
    public $precoCustoProduto;

    /**
     *Preço de Venda do Produto
     * @var string
    */ 
    public $precoVendaProduto;


    /**
     *Método responsável por cadastrar o produto.
     * @return
    */ 
    public function cadastrar(){
        //Inserir o produto no banco
        $obDatabase = new Database('cadastroproduto');
        $this->idProduto = $obDatabase->insert([
                'nomeProduto' => $this->nomeProduto,
                'quantidadeProduto' => $this->quantidadeProduto,
                'precoCustoProduto' => $this->precoCustoProduto,
                'precoVendaProduto' => $this->precoVendaProduto,
        ]);
        return true;

    }
    
    /**
     * Atualizar o produto no banco
     * @return boolean
     */
    public function atualizar(){
        return (new Database('cadastroproduto'))->update('idProduto = '.$this->idProduto,[
            'nomeProduto'       =>  $this->  nomeProduto,
            'quantidadeProduto' =>  $this->  quantidadeProduto,
            'precoCustoProduto' =>  $this->  precoCustoProduto,
            'precoVendaProduto' =>  $this->  precoVendaProduto,
        ]);
    }



    /**
     *Método responsável obter os produtos do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
    */ 
    public static function getProdutos($where = null, $order = null, $limit = null){
        return (new Database('cadastroproduto'))->select($where, $order, $limit)
                                                ->fetchAll(PDO::FETCH_CLASS,self::class);
      }


      /**
       * Método responsável por buscar um produto pelo ID
       * @param integer $idProduto
       * @return Produto
       */
      public static function getProduto($idProduto){
         return (new Database('cadastroproduto'))->select('idProduto = '.$idProduto)
                                                ->fetchObject(self::class);
        }


        /**
         * Método responsável por excluir a vaga do banco
         * @return boolean
         */
  public function excluir(){
    return (new Database('cadastroproduto'))->delete('idProduto = '.$this->idProduto);
  }
}