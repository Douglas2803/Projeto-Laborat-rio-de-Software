-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2021 às 16:49
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
  `id_alternativa` int(11) NOT NULL,
  `descricao` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id_alternativa`, `descricao`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, 'Sim'),
(9, 'Não'),
(10, 'Masculino'),
(11, 'Feminino'),
(12, 'Outro');

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
(3, 1, 1, '3- Eu estou satisfeito com o lugar em que moro.'),
(4, 1, 1, ' 4- Eu estou satisfeito com o sistema de Saúde de Caxias do Sul  \r\n(Infraestrutura/Atendimento).'),
(5, 1, 1, '5- Eu pratico alguma atividade física com frequência.'),
(6, 1, 1, '6- Eu caminho pela cidade com frequência.'),
(7, 1, 1, '7- Eu me sinto integrado à cidade de Caxias do Sul.'),
(8, 1, 1, '8- Eu estou satisfeito com a minha atual situação de trabalho.'),
(9, 1, 1, '9- Eu estou satisfeito com a situação financeira das pessoas que vivem comigo.'),
(10, 1, 1, '10- Eu estou satisfeito com o comércio existente nas proximidades de onde moro.'),
(11, 1, 1, '11- É fácil encontrar trabalho em Caxias do Sul'),
(12, 1, 1, '12- Eu estou satisfeito com o sistema educacional de Caxias do Sul \r\n(Ensino/Infraestrutura).'),
(13, 1, 1, '13- Eu estou satisfeito com a qualidade do ar de Caxias do Sul.'),
(14, 1, 1, '14- Eu estou satisfeito com o nível de barulho em Caxias do Sul'),
(15, 1, 1, '15 - \r\nEu estou empenhado em lutar contra as mudanças climáticas com práticas \r\nsustentáveis (separar o lixo, poupar água, dar preferência para produtos \r\nrecicláveis).\r\n'),
(16, 1, 1, '16 - Eu estou satisfeito com as opções culturais oferecidas na cidade de Caxias \r\ndo Sul (teatro, música, arte, dança, feiras livres e cinema)'),
(17, 1, 1, '17 -\r\nEu estou satisfeito com os espaços abertos de lazer oferecidas na cidade de \r\nCaxias do Sul (praças e parques).'),
(18, 1, 1, '18 - Eu estou satisfeito com os espaços para a prática de esportes em Caxias do \r\nSul.'),
(19, 1, 1, '19 - Eu estou satisfeito com os espaços abertos de lazer oferecidos no seu Bairro.'),
(20, 1, 1, '20 - Eu frequento as áreas abertas na minha cidade (praças e parques).'),
(21, 1, 1, '21 - Eu frequento atividades culturais na minha cidade'),
(22, 1, 1, '22 - As feiras ao ar livre atendem as minhas necessidade'),
(23, 1, 1, '23 - Eu estou satisfeito com a conservação dos edifícios em Caxias do Sul.\r\n'),
(24, 1, 1, '24 - É fácil encontrar uma boa habitação por um preço razoável em Caxias do\r\nSul.'),
(25, 2, 1, '25 - Eu estou satisfeito com a limpeza de Caxias do Sul.'),
(26, 1, 1, '26 - Os serviços de coleta e tratamento de lixo atendem seu bairro de forma \r\neficiente.'),
(27, 1, 1, '27 - Eu estou satisfeito com as ruas em Caxias do Sul.'),
(28, 1, 1, '28 - Eu estou satisfeito com as calçadas em Caxias do Sul.'),
(29, 1, 1, '29 - Eu estou satisfeito com o transporte público em Caxias do Sul.'),
(30, 1, 1, '30 - Eu estou satisfeito com o transporte para outras cidades partindo de Caxias \r\ndo Sul.'),
(31, 1, 1, '31 - Eu estou satisfeito com a distância entre as paradas de transporte público.'),
(32, 1, 1, '32 - Eu estou satisfeito com a qualidade das paradas do transporte público.'),
(33, 1, 1, '33 - Eu estou satisfeito com a facilidade de acesso do meu bairro aos pontos \r\nimportantes de Caxias do Sul.'),
(34, 1, 1, '34 - Eu estou satisfeito com meus percursos a pé na cidade.'),
(35, 1, 1, '35 - Eu estou satisfeito com a sinalização para pedestres na cidade.'),
(36, 1, 1, '36 - Os serviços de energia elétrica da prefeitura de Caxias do Sul ajudam as \r\npessoas de forma eficiente'),
(37, 1, 1, '37 - Os serviços dos Bombeiros de Caxias do Sul ajudam as pessoas de forma \r\neficiente.'),
(38, 1, 1, '38 -\r\nDe maneira geral, os serviços de segurança (polícia militar, civil e trânsito) da \r\nprefeitura de Caxias do Sul ajudam as pessoas de forma eficiente/adequada. '),
(39, 1, 1, '39 - Eu me considero participativo nas decisões públicas relacionadas à cidade \r\n(cobrando dos gestores, participando de audiências públicas).'),
(40, 1, 1, '40 - De modo geral, a administração pública de Caxias do Sul é confiável.'),
(41, 1, 1, '41 - Eu me sinto seguro em Caxias do Sul.'),
(42, 1, 1, '42 - Eu me sinto seguro no meu bairro. '),
(43, 1, 1, '43 - De modo geral, a maioria das pessoas em Caxias do Sul é confiável.'),
(44, 1, 1, '44 - De modo geral, a maioria das pessoas no meu bairro é confiável.'),
(45, 1, 1, '45 - O serviço de saneamento básico (tratamento de esgoto) atende meu bairro \r\nde forma eficiente. '),
(46, 1, 1, '46 - O abastecimento de água atende Caxias do Sul de forma eficiente.'),
(47, 1, 1, '47 - A presença de imigrantes (país, cidade) é bom para Caxias do Sul. '),
(48, 1, 1, '48 - Os programas sociais de Caxias do Sul atuam de forma eficiente.'),
(49, 1, 1, '49 - Os imigrantes influenciam de forma positiva a economia da nossa cidade. '),
(50, 1, 1, '50 - Gênero (sexo): '),
(51, 1, 2, '51 - Idade: '),
(52, 1, 1, '52 - Qual seu grau de instrução?'),
(53, 1, 1, '53 - Qual seu status de emprego/remuneração?'),
(54, 1, 2, '54 - Com quantas pessoas você mora?'),
(55, 1, 1, '55 - Quantas pessoas contribuem para a sua renda familiar?'),
(56, 1, 1, '56 - Qual a renda total familiar (considerando as pessoas que moram com você)(Valor base ano 2018,Nacional)'),
(57, 1, 2, '57 - Onde você mora? (bairro ou ponto de referência)'),
(58, 1, 1, '58 - Qual seu tempo de residência no local informado? '),
(59, 1, 2, '59 - Quantos veículos possuem na sua residência?'),
(60, 1, 1, '60) Qual o meio de transporte que você mais utiliza?'),
(61, 2, 1, '2- A frequência dos ônibus/lotações de Caxias do Sul é adequada às minhas necessidades.'),
(62, 1, 1, '1- Eu estou satisfeito de viver em Caxias do Sul.'),
(63, 1, 1, '2- Eu estou satisfeito com a vida que levo'),
(64, 1, 1, '3- Eu estou satisfeito com o lugar em que moro.'),
(65, 1, 1, ' 4- Eu estou satisfeito com o sistema de Saúde de Caxias do Sul  \r\n(Infraestrutura/Atendimento).'),
(66, 1, 1, '5- Eu pratico alguma atividade física com frequência.'),
(67, 1, 1, '6- Eu caminho pela cidade com frequência.'),
(68, 1, 1, '7- Eu me sinto integrado à cidade de Caxias do Sul.'),
(69, 1, 1, '8- Eu estou satisfeito com a minha atual situação de trabalho.'),
(70, 1, 1, '9- Eu estou satisfeito com a situação financeira das pessoas que vivem comigo.'),
(71, 1, 1, '10- Eu estou satisfeito com o comércio existente nas proximidades de onde moro.'),
(72, 1, 1, '11- É fácil encontrar trabalho em Caxias do Sul'),
(73, 1, 1, '12- Eu estou satisfeito com o sistema educacional de Caxias do Sul \r\n(Ensino/Infraestrutura).'),
(74, 1, 1, '13- Eu estou satisfeito com a qualidade do ar de Caxias do Sul.'),
(75, 1, 1, '14- Eu estou satisfeito com o nível de barulho em Caxias do Sul'),
(76, 1, 1, '15 - \r\nEu estou empenhado em lutar contra as mudanças climáticas com práticas \r\nsustentáveis (separar o lixo, poupar água, dar preferência para produtos \r\nrecicláveis).\r\n'),
(77, 1, 1, '16 - Eu estou satisfeito com as opções culturais oferecidas na cidade de Caxias \r\ndo Sul (teatro, música, arte, dança, feiras livres e cinema)'),
(78, 1, 1, '17 -\r\nEu estou satisfeito com os espaços abertos de lazer oferecidas na cidade de \r\nCaxias do Sul (praças e parques).'),
(79, 1, 1, '18 - Eu estou satisfeito com os espaços para a prática de esportes em Caxias do \r\nSul.'),
(80, 1, 1, '19 - Eu estou satisfeito com os espaços abertos de lazer oferecidos no seu Bairro.'),
(81, 1, 1, '20 - Eu frequento as áreas abertas na minha cidade (praças e parques).'),
(82, 1, 1, '21 - Eu frequento atividades culturais na minha cidade'),
(83, 1, 1, '22 - As feiras ao ar livre atendem as minhas necessidade'),
(84, 1, 1, '23 - Eu estou satisfeito com a conservação dos edifícios em Caxias do Sul.\r\n'),
(85, 1, 1, '24 - É fácil encontrar uma boa habitação por um preço razoável em Caxias do\r\nSul.'),
(86, 2, 1, '25 - Eu estou satisfeito com a limpeza de Caxias do Sul.'),
(87, 1, 1, '26 - Os serviços de coleta e tratamento de lixo atendem seu bairro de forma \r\neficiente.'),
(88, 1, 1, '27 - Eu estou satisfeito com as ruas em Caxias do Sul.'),
(89, 1, 1, '28 - Eu estou satisfeito com as calçadas em Caxias do Sul.'),
(90, 1, 1, '29 - Eu estou satisfeito com o transporte público em Caxias do Sul.'),
(91, 1, 1, '30 - Eu estou satisfeito com o transporte para outras cidades partindo de Caxias \r\ndo Sul.'),
(92, 1, 1, '31 - Eu estou satisfeito com a distância entre as paradas de transporte público.'),
(93, 1, 1, '32 - Eu estou satisfeito com a qualidade das paradas do transporte público.'),
(94, 1, 1, '33 - Eu estou satisfeito com a facilidade de acesso do meu bairro aos pontos \r\nimportantes de Caxias do Sul.'),
(95, 1, 1, '34 - Eu estou satisfeito com meus percursos a pé na cidade.'),
(96, 1, 1, '35 - Eu estou satisfeito com a sinalização para pedestres na cidade.'),
(97, 1, 1, '36 - Os serviços de energia elétrica da prefeitura de Caxias do Sul ajudam as \r\npessoas de forma eficiente'),
(98, 1, 1, '37 - Os serviços dos Bombeiros de Caxias do Sul ajudam as pessoas de forma \r\neficiente.'),
(99, 1, 1, '38 -\r\nDe maneira geral, os serviços de segurança (polícia militar, civil e trânsito) da \r\nprefeitura de Caxias do Sul ajudam as pessoas de forma eficiente/adequada. '),
(100, 1, 1, '39 - Eu me considero participativo nas decisões públicas relacionadas à cidade \r\n(cobrando dos gestores, participando de audiências públicas).'),
(101, 1, 1, '40 - De modo geral, a administração pública de Caxias do Sul é confiável.'),
(102, 1, 1, '41 - Eu me sinto seguro em Caxias do Sul.'),
(103, 1, 1, '42 - Eu me sinto seguro no meu bairro. '),
(104, 1, 1, '43 - De modo geral, a maioria das pessoas em Caxias do Sul é confiável.'),
(105, 1, 1, '44 - De modo geral, a maioria das pessoas no meu bairro é confiável.'),
(106, 1, 1, '45 - O serviço de saneamento básico (tratamento de esgoto) atende meu bairro \r\nde forma eficiente. '),
(107, 1, 1, '46 - O abastecimento de água atende Caxias do Sul de forma eficiente.'),
(108, 1, 1, '47 - A presença de imigrantes (país, cidade) é bom para Caxias do Sul. '),
(109, 1, 1, '48 - Os programas sociais de Caxias do Sul atuam de forma eficiente.'),
(110, 1, 1, '49 - Os imigrantes influenciam de forma positiva a economia da nossa cidade. '),
(111, 1, 1, '50 - Gênero (sexo): '),
(112, 1, 2, '51 - Idade: '),
(113, 1, 1, '52 - Qual seu grau de instrução?'),
(114, 1, 1, '53 - Qual seu status de emprego/remuneração?'),
(115, 1, 2, '54 - Com quantas pessoas você mora?'),
(116, 1, 1, '55 - Quantas pessoas contribuem para a sua renda familiar?'),
(117, 1, 1, '56 - Qual a renda total familiar (considerando as pessoas que moram com você)(Valor base ano 2018,Nacional)'),
(118, 1, 2, '57 - Onde você mora? (bairro ou ponto de referência)'),
(119, 1, 1, '58 - Qual seu tempo de residência no local informado? '),
(120, 1, 2, '59 - Quantos veículos possuem na sua residência?'),
(121, 1, 1, '60) Qual o meio de transporte que você mais utiliza?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas_alternativas`
--

CREATE TABLE `perguntas_alternativas` (
  `id_alt_resp` int(11) NOT NULL,
  `id_pergunta` int(11) NOT NULL,
  `id_alternativa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `perguntas_alternativas`
--

INSERT INTO `perguntas_alternativas` (`id_alt_resp`, `id_pergunta`, `id_alternativa`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(12, 2, 5),
(13, 2, 6),
(14, 2, 7),
(15, 3, 1),
(16, 3, 2),
(17, 3, 3),
(18, 3, 4),
(19, 3, 5),
(20, 3, 6),
(21, 3, 7);

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
  `id_alternativa` int(11) DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id_respostas`, `id_pergunta`, `id_alternativa`, `descricao`, `ip_usuario`) VALUES
(1, 1, 2, '', '::1'),
(2, 2, 3, '', '::1'),
(3, 21, 9, '', '::1');

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
  ADD PRIMARY KEY (`id_alternativa`);

--
-- Indexes for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id_pergunta`);

--
-- Indexes for table `perguntas_alternativas`
--
ALTER TABLE `perguntas_alternativas`
  ADD PRIMARY KEY (`id_alt_resp`);

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
  MODIFY `id_alternativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `perguntas_alternativas`
--
ALTER TABLE `perguntas_alternativas`
  MODIFY `id_alt_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `questionarios`
--
ALTER TABLE `questionarios`
  MODIFY `id_questionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_respostas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tipos_perguntas`
--
ALTER TABLE `tipos_perguntas`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
