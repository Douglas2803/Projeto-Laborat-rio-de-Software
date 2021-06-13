-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2021 às 18:07
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
(25, 1, 1, '25 - Eu estou satisfeito com a limpeza de Caxias do Sul.'),
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
(60, 1, 1, '60) Qual o meio de transporte que você mais utiliza?');

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
(21, 3, 7),
(22, 4, 1),
(23, 4, 2),
(24, 4, 3),
(25, 4, 4),
(26, 4, 5),
(27, 4, 6),
(28, 4, 7),
(29, 5, 1),
(30, 5, 2),
(31, 5, 3),
(32, 5, 4),
(33, 5, 5),
(34, 5, 6),
(35, 5, 7),
(36, 6, 1),
(37, 6, 2),
(38, 6, 3),
(39, 6, 4),
(40, 6, 5),
(41, 6, 6),
(42, 6, 7),
(43, 7, 1),
(44, 7, 2),
(45, 7, 3),
(46, 7, 4),
(47, 7, 5),
(48, 7, 6),
(49, 7, 7),
(50, 8, 1),
(51, 8, 2),
(52, 8, 3),
(53, 8, 4),
(54, 8, 5),
(55, 8, 6),
(56, 8, 7),
(57, 9, 1),
(58, 9, 2),
(59, 9, 3),
(60, 9, 4),
(61, 9, 5),
(62, 9, 6),
(63, 9, 7),
(64, 10, 1),
(65, 10, 2),
(66, 10, 3),
(67, 10, 4),
(68, 10, 5),
(69, 10, 6),
(70, 10, 7),
(71, 11, 1),
(72, 11, 2),
(73, 11, 3),
(74, 11, 4),
(75, 11, 5),
(76, 11, 6),
(77, 11, 7),
(78, 12, 1),
(79, 12, 2),
(80, 12, 3),
(81, 12, 4),
(82, 12, 5),
(83, 12, 6),
(84, 12, 7),
(85, 13, 1),
(86, 13, 2),
(87, 13, 3),
(88, 13, 4),
(89, 13, 5),
(90, 13, 6),
(91, 13, 7),
(92, 14, 1),
(93, 14, 2),
(94, 14, 3),
(95, 14, 4),
(96, 14, 5),
(97, 14, 6),
(98, 14, 7),
(99, 15, 1),
(100, 15, 2),
(101, 15, 3),
(102, 15, 4),
(103, 15, 5),
(104, 15, 6),
(105, 15, 7),
(106, 16, 1),
(107, 16, 2),
(108, 16, 3),
(109, 16, 4),
(110, 16, 5),
(111, 16, 6),
(112, 16, 7),
(113, 17, 1),
(114, 17, 2),
(115, 17, 3),
(116, 17, 4),
(117, 17, 5),
(118, 17, 6),
(119, 17, 7),
(120, 18, 1),
(121, 18, 2),
(122, 18, 3),
(123, 18, 4),
(124, 18, 5),
(125, 18, 6),
(126, 18, 7),
(127, 19, 1),
(128, 19, 2),
(129, 19, 3),
(130, 19, 4),
(131, 19, 5),
(132, 19, 6),
(133, 19, 7),
(134, 20, 1),
(135, 20, 2),
(136, 20, 3),
(137, 20, 4),
(138, 20, 5),
(139, 20, 6),
(140, 20, 7),
(141, 21, 1),
(142, 21, 2),
(143, 21, 3),
(144, 21, 4),
(145, 21, 5),
(146, 21, 6),
(147, 21, 7),
(148, 22, 1),
(149, 22, 2),
(150, 22, 3),
(151, 22, 4),
(152, 22, 5),
(153, 22, 6),
(154, 22, 7),
(155, 23, 1),
(156, 23, 2),
(157, 23, 3),
(158, 23, 4),
(159, 23, 5),
(160, 23, 6),
(161, 23, 7),
(162, 24, 1),
(163, 24, 2),
(164, 24, 3),
(165, 24, 4),
(166, 24, 5),
(167, 24, 6),
(168, 24, 7),
(169, 25, 1),
(170, 25, 2),
(171, 25, 3),
(172, 25, 4),
(173, 25, 5),
(174, 25, 6),
(175, 25, 7),
(176, 26, 1),
(177, 26, 2),
(178, 26, 3),
(179, 26, 4),
(180, 26, 5),
(181, 26, 6),
(182, 26, 7),
(183, 27, 1),
(184, 27, 2),
(185, 27, 3),
(186, 27, 4),
(187, 27, 5),
(188, 27, 6),
(189, 27, 7),
(190, 28, 1),
(191, 28, 2),
(192, 28, 3),
(193, 28, 4),
(194, 28, 5),
(195, 28, 6),
(196, 28, 7),
(197, 29, 1),
(198, 29, 2),
(199, 29, 3),
(200, 29, 4),
(201, 29, 5),
(202, 29, 6),
(203, 29, 7),
(204, 30, 1),
(205, 30, 2),
(206, 30, 3),
(207, 30, 4),
(208, 30, 5),
(209, 30, 6),
(210, 30, 7),
(211, 31, 1),
(212, 31, 2),
(213, 31, 3),
(214, 31, 4),
(215, 31, 5),
(216, 31, 6),
(217, 31, 7),
(218, 32, 1),
(219, 32, 2),
(220, 32, 3),
(221, 32, 4),
(222, 32, 5),
(223, 32, 6),
(224, 32, 7),
(225, 33, 1),
(226, 33, 2),
(227, 33, 3),
(228, 33, 4),
(229, 33, 5),
(230, 33, 6),
(231, 33, 7),
(232, 34, 1),
(233, 34, 2),
(234, 34, 3),
(235, 34, 4),
(236, 34, 5),
(237, 34, 6),
(238, 34, 7),
(239, 35, 1),
(240, 35, 2),
(241, 35, 3),
(242, 35, 4),
(243, 35, 5),
(244, 35, 6),
(245, 35, 7),
(246, 36, 1),
(247, 36, 2),
(248, 36, 3),
(249, 36, 4),
(250, 36, 5),
(251, 36, 6),
(252, 36, 7),
(253, 37, 1),
(254, 37, 2),
(255, 37, 3),
(256, 37, 4),
(257, 37, 5),
(258, 37, 6),
(259, 37, 7),
(260, 38, 1),
(261, 38, 2),
(262, 38, 3),
(263, 38, 4),
(264, 38, 5),
(265, 38, 6),
(266, 38, 7),
(267, 29, 1),
(268, 29, 2),
(269, 29, 3),
(270, 29, 4),
(271, 29, 5),
(272, 29, 6),
(273, 29, 7),
(274, 40, 1),
(275, 40, 2),
(276, 40, 3),
(277, 40, 4),
(278, 40, 5),
(279, 40, 6),
(280, 40, 7),
(281, 41, 1),
(282, 41, 2),
(283, 41, 3),
(284, 41, 4),
(285, 41, 5),
(286, 41, 6),
(287, 41, 7),
(288, 42, 1),
(289, 42, 2),
(290, 42, 3),
(291, 42, 4),
(292, 42, 5),
(293, 42, 6),
(294, 42, 7),
(295, 43, 1),
(296, 43, 2),
(297, 43, 3),
(298, 43, 4),
(299, 43, 5),
(300, 43, 6),
(301, 43, 7),
(302, 44, 1),
(303, 44, 2),
(304, 44, 3),
(305, 44, 4),
(306, 44, 5),
(307, 44, 6),
(308, 44, 7),
(309, 45, 1),
(310, 45, 2),
(311, 45, 3),
(312, 45, 4),
(313, 45, 5),
(314, 45, 6),
(315, 45, 7),
(316, 46, 1),
(317, 46, 2),
(318, 46, 3),
(319, 46, 4),
(320, 46, 5),
(321, 46, 6),
(322, 46, 7),
(323, 47, 1),
(324, 47, 2),
(325, 47, 3),
(326, 47, 4),
(327, 47, 5),
(328, 47, 6),
(329, 47, 7),
(330, 48, 1),
(331, 48, 2),
(332, 48, 3),
(333, 48, 4),
(334, 48, 5),
(335, 48, 6),
(336, 48, 7),
(337, 49, 1),
(338, 49, 2),
(339, 49, 3),
(340, 49, 4),
(341, 49, 5),
(342, 49, 6),
(343, 49, 7),
(344, 50, 10),
(345, 50, 11),
(346, 50, 12);

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
  MODIFY `id_pergunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `perguntas_alternativas`
--
ALTER TABLE `perguntas_alternativas`
  MODIFY `id_alt_resp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;
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
