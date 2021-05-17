-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2021 às 23:14
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id_alternativas` int(11) NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id_alternativas`, `descricao`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas_respostas`
--

CREATE TABLE `alternativas_respostas` (
  `id_alt_resp` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `id_alternativa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id_pergunta` int(11) NOT NULL,
  `id_questionario` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `pergunta` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id_pergunta`, `id_questionario`, `id_tipo`, `pergunta`) VALUES
(1, 1, 1, '1- Eu estou satisfeito de viver em Caxias do Sul.'),
(2, 1, 1, '2- Eu estou satisfeito com a vida que levo'),
(3, 1, 1, '3- Eu estou satisfeito com o lugar em que moro.\r\n'),
(4, 1, 1, ' 4- Eu estou satisfeito com o sistema de Saúde de Caxias do Sul  \r\n(Infraestrutura/Atendimento).'),
(5, 1, 1, '5- Eu pratico alguma atividade física com frequência.'),
(6, 1, 1, '6- Eu caminho pela cidade com frequência.'),
(7, 1, 1, '7- Eu me sinto integrado à cidade de Caxias do Sul.'),
(8, 1, 1, '8- Eu estou satisfeito com a minha atual situação de trabalho.'),
(9, 1, 1, '9- Eu estou satisfeito com a situação financeira das pessoas que vivem comigo.'),
(10, 1, 1, '10- Eu estou satisfeito com o comércio existente nas proximidades de onde moro.'),
(11, 2, 1, '1- No geral, os serviços de ônibus/lotação da Cidade de Caxias do Sul são satisfatórios.'),
(12, 2, 1, '2- A frequência dos ônibus/lotações de Caxias do Sul é adequada às minhas necessidades.\r\n'),
(13, 2, 1, '3- Os ônibus/lotações são pontuais.'),
(14, 2, 1, '4- É possível realizar mais de uma viagem pagando apenas uma tarifa por meio da passagem integrada.\r\n'),
(15, 2, 1, '5- O valor das tarifas de ônibus/lotação é acessível.'),
(16, 2, 1, '6- Eu me sinto seguro nos terminais e nas paradas de ônibus/lotação de Caxias do Sul.\r\n'),
(17, 2, 1, '7- Eu me sinto seguro dentro dos ônibus/lotações de Caxias do Sul.'),
(18, 2, 1, '8- Os ônibus/lotações de Caxias do Sul são confortáveis.'),
(19, 2, 1, '9- Os terminais e paradas de ônibus/lotações de Caxias do Sul são confortáveis.'),
(20, 2, 1, '10- É fácil obter informações a respeito dos serviços de ônibus em Caxias do Sul.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionarios`
--

CREATE TABLE `questionarios` (
  `id_questionario` int(11) NOT NULL,
  `questionario` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`id_questionario`, `questionario`) VALUES
(1, 'questionario1'),
(2, 'questionario2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id_respostas` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `id_alternativa` int(11) NOT NULL,
  `descricao` int(11) NOT NULL,
  `ip_usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_perguntas`
--

CREATE TABLE `tipos_perguntas` (
  `id_tipo` int(11) NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_perguntas`
--

INSERT INTO `tipos_perguntas` (`id_tipo`, `descricao`) VALUES
(1, 'multipla'),
(2, 'texto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id_alternativas`);

--
-- Indexes for table `alternativas_respostas`
--
ALTER TABLE `alternativas_respostas`
  ADD PRIMARY KEY (`id_alt_resp`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `questionarios`
--
ALTER TABLE `questionarios`
  ADD PRIMARY KEY (`id_questionario`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id_respostas`);

--
-- Indexes for table `tipos_perguntas`
--
ALTER TABLE `tipos_perguntas`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id_alternativas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `alternativas_respostas`
--
ALTER TABLE `alternativas_respostas`
  MODIFY `id_alt_resp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `questionarios`
--
ALTER TABLE `questionarios`
  MODIFY `id_questionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_respostas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipos_perguntas`
--
ALTER TABLE `tipos_perguntas`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
