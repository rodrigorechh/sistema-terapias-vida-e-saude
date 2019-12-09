CREATE DATABASE IF NOT EXISTS clinica;

USE clinica;

CREATE TABLE tab_clientes (
    nome varchar(100),
    idade integer(3),
    email varchar(30),
    telefone varchar(20),
    celular varchar(20),
    status varchar(20),
    foto varchar(200),
    cpf varchar(20) PRIMARY KEY,
    data_nascimento date,
    genero varchar(1)
);

CREATE TABLE tab_agenda (
    pagamento char,
    comparecimento char,
    anotacoes varchar(200),
    id_cpf varchar(20),
    valor double,
    hora time,
    data date,
    id INTEGER AUTO_INCREMENT PRIMARY KEY
);

CREATE TABLE gastos (
    tag varchar(15),
    descricao varchar(200),
    valor double,
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    fornecedor varchar(100),
    data date
);

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(220) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `id_cpf` varchar(20),
  `valor` double,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

CREATE TABLE clientes_agenda_tab_agenda_tab_clientes_gastos (
    fk_tab_clientes_cpf varchar(20)
);
 
ALTER TABLE clientes_agenda_tab_agenda_tab_clientes_gastos ADD CONSTRAINT FK_clientes_agenda_tab_agenda_tab_clientes_gastos_1
    FOREIGN KEY (fk_tab_clientes_cpf)
    REFERENCES tab_clientes (cpf)
    ON DELETE NO ACTION;
    

INSERT INTO `tab_clientes` (`nome`, `idade`, `email`, `data_nascimento`,`telefone`, `celular`, `status`, `foto`, `cpf`, `genero`) 
VALUES ('Maria da Silva', '23', 'mariadasilva@gmail.com', '1991-10-10','1111111111', '11111111111', 'Sem débito', "padrao.jpg", '11111111111', 'F');

INSERT INTO `tab_clientes` (`nome`, `idade`, `email`, `data_nascimento`,`telefone`, `celular`, `status`, `foto`, `cpf`, `genero`) 
VALUES ('joão da Silva', '25', 'joaodasilva@gmail.com', '1980-10-10','2222222222', '22222222222', 'Sem débito', "padrao.jpg", '22222222222', 'M');

INSERT INTO `tab_clientes` (`nome`, `idade`, `email`, `data_nascimento`,`telefone`, `celular`, `status`, `foto`, `cpf`, `genero`) 
VALUES ('Paulo Darf', '23', 'paulodarfa@gmail.com', '1990-10-10','3333333333', '33333333333', 'Sem débito', "padrao.jpg", '33333333333', 'M');

INSERT INTO `tab_clientes` (`nome`, `idade`, `email`, `data_nascimento`,`telefone`, `celular`, `status`, `foto`, `cpf`, `genero`) 
VALUES ('Maico Ramos', '322', 'maicoramos@gmail.com', '1988-10-10','4444444444', '44444444444', 'Sem débito', "padrao.jpg", '44444444444', 'M');

INSERT INTO `tab_clientes` (`nome`, `idade`, `email`, `data_nascimento`,`telefone`, `celular`, `status`, `foto`, `cpf`, `genero`) 
VALUES ('Judas', '23', 'judas@gmail.com',  '1989-10-10','5555555555','55555555555', 'Sem débito', "padrao.jpg", '55555555555', 'M');


INSERT INTO `tab_agenda` (`pagamento`, `comparecimento`, `anotacoes`, `id_cpf`, `valor`, `hora`, `data`, `id`) 
VALUES (NULL, NULL, 'Massagem', '11111111111', '100', '14:00:00', '2020-01-03', NULL);

INSERT INTO `tab_agenda` (`pagamento`, `comparecimento`, `anotacoes`, `id_cpf`, `valor`, `hora`, `data`, `id`) 
VALUES (NULL, NULL, 'Massagem', '22222222222', '110', '15:00:00', '2020-01-01', NULL);

INSERT INTO `tab_agenda` (`pagamento`, `comparecimento`, `anotacoes`, `id_cpf`, `valor`, `hora`, `data`, `id`) 
VALUES (NULL, NULL, 'Massagem', '11111111111', '130', '16:00:00', '2020-01-02', NULL);

INSERT INTO `tab_agenda` (`pagamento`, `comparecimento`, `anotacoes`, `id_cpf`, `valor`, `hora`, `data`, `id`) 
VALUES (NULL, NULL, 'Massagem', '33333333333', '130', '16:00:00', '2020-01-10', NULL);


INSERT INTO `gastos` (`tag`, `descricao`, `valor`, `fornecedor`, `data`) 
VALUES ('Aluguel', 'pagamento do aluguel', '860,00', NULL, '2019-12-01');

INSERT INTO `gastos` (`tag`, `descricao`, `valor`, `fornecedor`, `data`) 
VALUES ('Luz', 'pagamento de boleto', '185,00', 'Celesc', '2019-12-03');

INSERT INTO `gastos` (`tag`, `descricao`, `valor`, `fornecedor`, `data`) 
VALUES ('Internet', 'pagamento de boleto', '100,00', 'Net', '2019-12-05');
