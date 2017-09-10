USE tb_fornecedores;

CREATE TABLE fornecedor(
	idFornecedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    statusFornecedor BOOLEAN NOT NULL,
	nomeFornecedor VARCHAR(255) NOT NULL,
    cpnjFornecedor VARCHAR(14) NOT NULL,
    ieFornecedor VARCHAR(12) NOT NULL,
    categoriaFornecimento VARCHAR(20) NOT NULL,
    ruaFornecedor VARCHAR(50) NOT NULL,
    cidadeFonecedor VARCHAR(50) NOT NULL,
    paisFornecedor VARCHAR(50) NOT NULL,
    cepFornecedor VARCHAR(8) NOT NULL,
    numeroFornecedor INT,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

SELECT * FROM fornecedor;

SELECT * FROM fornecedor WHERE (nomeFornecedor LIKE '%Itaqua%' OR cidadeFonecedor LIKE '%Itaqua%' OR cpnjFornecedor LIKE 'Itaqua' OR ieFornecedor LIKE 'Itaqua') AND statusFornecedor = 1;

#DELETE FROM fornecedor WHERE idFornecedor = 2;

TRUNCATE TABLE fornecedor;

#DROP TABLE fornecedor;