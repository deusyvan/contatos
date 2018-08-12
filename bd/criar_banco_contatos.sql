-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 11-Ago-2018 às 23:56
-- Versão do servidor: 5.6.39-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contatos`
--
CREATE DATABASE IF NOT EXISTS `contatos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `contatos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`) VALUES
(1, 'Impulsionar'),
(2, 'Bom dia'),
(3, 'Boa Tarde'),
(4, 'Boa Noite'),
(5, 'Fim de Semana'),
(6, 'Feriado'),
(7, 'Quem sou eu'),
(8, 'Projetos'),
(9, 'Contato'),
(10, 'Meu Número'),
(11, 'Lembrar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE `cidades` (
  `id` int(11) NOT NULL,
  `nome_cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `graduacao` varchar(100) DEFAULT NULL,
  `om` varchar(100) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `endereco` varchar(300) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `email3` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `pager` varchar(100) DEFAULT NULL,
  `endereco2` varchar(300) DEFAULT NULL,
  `endereco3` varchar(300) DEFAULT NULL,
  `endereco4` varchar(400) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `outro_fone` varchar(45) DEFAULT NULL,
  `categoria` varchar(300) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL COMMENT 'Refere-se ao campo categoria de contatos',
  `id_usuario` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_graduacao` int(11) DEFAULT NULL,
  `id_om` int(11) DEFAULT NULL,
  `id_cidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `graduacao`, `om`, `genero`, `endereco`, `email1`, `email2`, `email3`, `mobile`, `pager`, `endereco2`, `endereco3`, `endereco4`, `cidade`, `estado`, `pais`, `outro_fone`, `categoria`, `id_grupo`, `id_usuario`, `id_status`, `id_graduacao`, `id_om`, `id_cidade`) VALUES
(1, '1 - teste', NULL, NULL, '', '', '', '', '', '6754332', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 1, 12, 0, 0, 0),
(2, 'Ramon Dos Reis Costa', NULL, NULL, NULL, '', '', NULL, NULL, '999279447', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 7, 13, NULL, NULL, NULL),
(3, 'teste', NULL, NULL, '', '', '', '', '', '96968585', '', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 6, 8, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacoes`
--

CREATE TABLE `graduacoes` (
  `id` int(11) NOT NULL,
  `sigla` varchar(45) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome_grupo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome_grupo`) VALUES
(1, 'Oficiais'),
(2, 'Praças'),
(3, 'Presidência'),
(4, 'Pensionistas'),
(5, 'Bonfinópolis'),
(6, 'Apoio'),
(7, 'Civis'),
(8, 'Pão de Queijo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `id_status` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_alteracao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `id_usuario`, `id_categoria`, `titulo`, `descricao`, `id_status`, `data_criacao`, `data_alteracao`) VALUES
(1, 1, 6, 'Dia dos Pais', 'Desde já, agradeço a atenção e o respeito em nome do amigo que lhe  indicou, como uma pessoa honesta e desejosa de mudanças Geral na Política NACIONAL!!', 7, '2018-08-09 10:00:00', '2018-08-11 23:21:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_imagens`
--

CREATE TABLE `mensagens_imagens` (
  `id` int(11) NOT NULL,
  `id_mensagem` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens_imagens`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `om_unidades`
--

CREATE TABLE `om_unidades` (
  `id` int(11) NOT NULL,
  `sigla_om` varchar(45) NOT NULL,
  `denominacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuário'),
(3, 'Cadastro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `id_mensagem` int(11) NOT NULL,
  `lista_contatos_id` text NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT '7',
  `data_envio` datetime DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `id_mensagem`, `lista_contatos_id`, `id_status`, `data_envio`, `id_usuario`) VALUES
(10, 13, '1, 6', 7, NULL, 1),
(11, 13, '2, 5, 8, 9, 1000', 5, NULL, 7),
(12, 13, '123600, 12601, 10', 1, NULL, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nome_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `nome_status`) VALUES
(1, 'Cancelado(a)'),
(2, 'Não enviada'),
(3, 'Só E-mail'),
(4, 'Fixo'),
(5, 'Mensagem Direta'),
(6, 'Não Apoia'),
(7, 'Pendente'),
(8, 'Inexistente'),
(9, 'Enviada'),
(10, 'Não tem Watzap'),
(11, 'Tem Watzap'),
(12, 'Alterado'),
(13, 'Cadastro On-Line');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `perfil` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `perfil`) VALUES
(1, 'Deusyvan Silva', 'deusyvan@gmail.com', '4a8a72d10c2ec664e519554cbf3eeec2', '61 9 85481931', 1),
(2, 'deusyvan Silva', 'deusyvan.silva@gmail.com', '202cb962ac59075b964b07152d234b70', '789456123', 3),
(4, 'George Carvalho', 'georgecarvalho46@gmail.com', '84039953da2882d78766525ab85b9ee4', '61996295303', 3),
(5, 'Everaldo Antonio da Cruz', 'amigosdosgteveraldo@gmail.com', 'c571f8b1e368c6c31605c1aa0e2a094c', '61991648558', 3),
(6, 'Marileide ', 'leide.mineiro82@gmail.com', 'cfdc1b59b7846afdf130908b41c2b510', '984253658', 3),
(7, 'Rones Alvesones', 'ronescassimiro@gmail.com', '5198f27ebdef27ab13c4773f0e4eedb6', '999286550', 3),
(8, 'jose eloi fernandes neto', 'joseeloi22@gmail.com', '7d0ac4925ad15225d9a9c2b101e8546b', '61993213467', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduacoes`
--
ALTER TABLE `graduacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo_UNIQUE` (`titulo`);

--
-- Indexes for table `mensagens_imagens`
--
ALTER TABLE `mensagens_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `om_unidades`
--
ALTER TABLE `om_unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `graduacoes`
--
ALTER TABLE `graduacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mensagens_imagens`
--
ALTER TABLE `mensagens_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `om_unidades`
--
ALTER TABLE `om_unidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
