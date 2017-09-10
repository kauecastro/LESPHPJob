<?php 

class Fornecedor extends Sql
{
    private $filter;
	private $idFornecedor;
    private $statusFornecedor;
	private $nomeFornecedor;
	private $cnpjFornecedor;
	private $ieFornecedor;
	private $categoriaFornecimento;
	private $ruaFornecedor;
	private $cidadeFonecedor;
	private $paisFornecedor;
	private $cepFornecedor;
	private $numeroFornecedor;

    public function getStatusFornecedor()
    {
        return $this->statusFornecedor;
    }

    public function setStatusFornecedor($statusFornecedor)
    {
        $this->statusFornecedor = $statusFornecedor;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor($idFornecedor)
    {
        $this->idFornecedor = $idFornecedor;
    }

    public function getNomeFornecedor()
    {
        return $this->nomeFornecedor;
    }

    public function setNomeFornecedor($nomeFornecedor)
    {
        $this->nomeFornecedor = $nomeFornecedor;
    }

    public function getCnpjFornecedor()
    {
        return $this->cnpjFornecedor;
    }

    public function setCnpjFornecedor($cnpjFornecedor)
    {
        $this->cnpjFornecedor = $cnpjFornecedor;
    }

    public function getIeFornecedor()
    {
        return $this->ieFornecedor;
    }

    public function setIeFornecedor($ieFornecedor)
    {
        $this->ieFornecedor = $ieFornecedor;
    }

    public function getCategoriaFornecimento()
    {
        return $this->categoriaFornecimento;
    }

    public function setCategoriaFornecimento($categoriaFornecimento)
    {
        $this->categoriaFornecimento = $categoriaFornecimento;
    }

    public function getRuaFornecedor()
    {
        return $this->ruaFornecedor;
    }

    public function setRuaFornecedor($ruaFornecedor)
    {
        $this->ruaFornecedor = $ruaFornecedor;
    }

    public function getCidadeFonecedor()
    {
        return $this->cidadeFonecedor;
    }

    public function setCidadeFonecedor($cidadeFonecedor)
    {
        $this->cidadeFonecedor = $cidadeFonecedor;
    }

    public function getPaisFornecedor()
    {
        return $this->paisFornecedor;
    }

    public function setPaisFornecedor($paisFornecedor)
    {
        $this->paisFornecedor = $paisFornecedor;
    }

    public function getCepFornecedor()
    {
        return $this->cepFornecedor;
    }

    public function setCepFornecedor($cepFornecedor)
    {
        $this->cepFornecedor = $cepFornecedor;
    }

    public function getNumeroFornecedor()
    {
        return $this->numeroFornecedor;
    }

    public function setNumeroFornecedor($numeroFornecedor)
    {
        $this->numeroFornecedor = $numeroFornecedor;
    }

    public function setData($nomeFornecedor, $cnpjFornecedor, $ieFornecedor, $categoriaFornecimento, $ruaFornecedor, 
        $cidadeFonecedor, $paisFornecedor, $cepFornecedor, $numeroFornecedor)
    {
        $this->setNomeFornecedor($nomeFornecedor);
        $this->setCnpjFornecedor($cnpjFornecedor);
        $this->setIeFornecedor($ieFornecedor);
        $this->setCategoriaFornecimento($categoriaFornecimento);
        $this->setRuaFornecedor($ruaFornecedor);
        $this->setCidadeFonecedor($cidadeFonecedor);
        $this->setPaisFornecedor($paisFornecedor);
        $this->setCepFornecedor($cepFornecedor);
        $this->setNumeroFornecedor($numeroFornecedor);
    }

    // CRUD
    public function insert()
    {
        $sql = new Sql();
        $sql->query('INSERT INTO fornecedor (statusFornecedor, nomeFornecedor, cpnjFornecedor, ieFornecedor, categoriaFornecimento, ruaFornecedor, cidadeFonecedor, paisFornecedor, cepFornecedor, numeroFornecedor) VALUES (:STATUS, :NOME, :CNPJ, :IE, :CATEGORIA, :RUA, :CIDADE, :PAIS, :CEP, :NUMERO)', array(
                ':STATUS' => $this->getStatusFornecedor(),
                ':NOME' => $this->getNomeFornecedor(),
                ':CNPJ' => $this->getCnpjFornecedor(),
                ':IE' => $this->getIeFornecedor(),
                ':CATEGORIA' => $this->getCategoriaFornecimento(),
                ':RUA' => $this->getRuaFornecedor(),
                ':CIDADE' => $this->getCidadeFonecedor(),
                ':PAIS' => $this->getPaisFornecedor(),
                ':CEP' => $this->getCepFornecedor(),
                ':NUMERO' => $this->getNumeroFornecedor()
            ));
    }

    public function selectFilter($filter)
    {
        $sql = new Sql();
        $stmt = $sql->query("SELECT idFornecedor, nomeFornecedor, cpnjFornecedor, ieFornecedor, categoriaFornecimento, ruaFornecedor, cidadeFonecedor, paisFornecedor, cepFornecedor, numeroFornecedor, dtcadastro FROM fornecedor WHERE (nomeFornecedor LIKE :NOME OR cidadeFonecedor LIKE :CIDADE OR cpnjFornecedor LIKE :CNPJ OR ieFornecedor LIKE :IE) AND statusFornecedor = 1", array(
                ':NOME' => '%' . $this->getFilter() . '%',
                ':CIDADE' => '%' . $this->getFilter() . '%',
                ':CNPJ' => $this->getFilter(),
                ':IE' => $this->getFilter()
            ));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function select()
    {
        $sql = new Sql();
        $stmt = $sql->query("SELECT idFornecedor, nomeFornecedor, cpnjFornecedor, ieFornecedor, categoriaFornecimento, ruaFornecedor, cidadeFonecedor, paisFornecedor, cepFornecedor, numeroFornecedor, dtcadastro FROM fornecedor WHERE statusFornecedor = 1");

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id)
    {
        $sql = new Sql();
        $this->setIdFornecedor($id);
        $stmt = $sql->query("UPDATE fornecedor SET nomeFornecedor = :NOME, cpnjFornecedor = :CNPJ, ieFornecedor = :IE,
            categoriaFornecimento = :CAT, ruaFornecedor = :RUA, cidadeFonecedor = :CIDADE, paisFornecedor = :PAIS,
            cepFornecedor = :CEP, numeroFornecedor = :NUM WHERE idFornecedor = :ID", array(
                ':ID' => $this->getIdFornecedor(),
                ':NOME' => $this->getNomeFornecedor(),
                ':CNPJ' => $this->getCnpjFornecedor(),
                ':IE' => $this->getIeFornecedor(),
                ':CAT' => $this->getCategoriaFornecimento(),
                ':RUA' => $this->getRuaFornecedor(),
                ':CIDADE' => $this->getCidadeFonecedor(),
                ':PAIS' => $this->getPaisFornecedor(),
                ':CEP' => $this->getCepFornecedor(),
                ':NUM' => $this->getNumeroFornecedor()
            ));
    }

    public function delete($id)
    {
        $sql = new Sql();
        $this->setIdFornecedor($id);
        $stmt = $sql->query("UPDATE fornecedor SET statusFornecedor = 0 WHERE idFornecedor = :ID", array(
            ':ID' => $this->getIdFornecedor()
        ));
    }
}
?>