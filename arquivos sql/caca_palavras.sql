-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2017 às 19:45
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caca_palavras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `usuario` varchar(40) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `admin` varchar(40) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `user_pass`, `admin`, `id_usuario`) VALUES
('admin', '1234', 'sim', 0),
('teste', '050484', '', 3),
('teste2', '050484', '', 4),
('admin', '1234', '', 5),
('admin', '1234', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `palavras`
--

CREATE TABLE `palavras` (
  `palavra` varchar(40) NOT NULL,
  `tema` varchar(40) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `palavras`
--

INSERT INTO `palavras` (`palavra`, `tema`, `id`) VALUES
('apito', 'Futebol', 185),
('gramado', 'Futebol', 184),
('goleiro', 'Futebol', 181),
('trave', 'Futebol', 182),
('jogador', 'Futebol', 183),
('bola', 'Futebol', 178),
('cartão', 'Futebol', 186),
('juiz', 'Futebol', 187),
('time', 'Futebol', 188),
('chuteira', 'Futebol', 189),
('falta', 'Futebol', 190),
('carrinho', 'Futebol', 191),
('penalti', 'Futebol', 192),
('campo', 'Futebol', 193),
('campeonato', 'Futebol', 194),
('drible', 'Futebol', 195),
('artilheiro', 'Futebol', 196),
('escanteio', 'Futebol', 197),
('estádio', 'Futebol', 198),
('titular', 'Futebol', 199),
('atacante', 'Futebol', 200),
('zagueiro', 'Futebol', 201),
('treinador', 'Futebol', 202),
('cabra', 'Mamíferos', 203),
('macaco', 'Mamíferos', 204),
('tigre', 'Mamíferos', 205),
('vaca', 'Mamíferos', 206),
('cachorro', 'Mamíferos', 207),
('raposa', 'Mamíferos', 208),
('javali', 'Mamíferos', 209),
('gato', 'Mamíferos', 210),
('golfinho', 'Mamíferos', 211),
('elefante', 'Mamíferos', 212),
('lobo', 'Mamíferos', 213),
('leão', 'Mamíferos', 214),
('baleia', 'Mamíferos', 215),
('morcego', 'Mamíferos', 216),
('porco', 'Mamíferos', 217),
('coelho', 'Mamíferos', 218),
('homem', 'Mamíferos', 219),
('capivara', 'Mamíferos', 220),
('anta', 'Mamíferos', 221),
('zebra', 'Mamíferos', 222),
('maçã', 'Frutas', 223),
('açai', 'Frutas', 224),
('banana', 'Frutas', 225),
('abacate', 'Frutas', 226),
('abacaxi', 'Frutas', 227),
('manga', 'Frutas', 228),
('goiaba', 'Frutas', 229),
('acerola', 'Frutas', 230),
('laranja', 'Frutas', 231),
('pera', 'Frutas', 232),
('graviola', 'Frutas', 233),
('melancia', 'Frutas', 234),
('mamão', 'Frutas', 235),
('melão', 'Frutas', 236),
('tangerina', 'Frutas', 237),
('caqui', 'Frutas', 238),
('cacau', 'Frutas', 239),
('uva', 'Frutas', 240),
('jabuticaba', 'Frutas', 241),
('maracujá', 'Frutas', 242),
('cajú', 'Frutas', 243),
('guaraná', 'Frutas', 244);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rank`
--

CREATE TABLE `rank` (
  `usuario` varchar(40) NOT NULL,
  `tempo` time(1) NOT NULL,
  `nivel` varchar(40) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `rank`
--

INSERT INTO `rank` (`usuario`, `tempo`, `nivel`, `id`) VALUES
('teste', '00:00:23.0', 'Médio', 11),
('teste', '00:00:20.0', 'Médio', 12),
('teste', '00:00:32.0', 'Díficil', 13),
('teste', '00:00:17.0', 'Díficil', 14),
('teste', '00:00:19.0', 'Díficil', 15),
('teste', '00:00:07.0', 'Díficil', 16),
('teste', '00:00:06.0', 'Fácil', 17),
('teste', '00:00:07.0', 'Fácil', 18),
('teste', '00:00:09.0', 'Fácil', 19),
('teste', '00:00:02.0', 'Fácil', 20),
('teste', '00:00:18.0', 'Fácil', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temas`
--

CREATE TABLE `temas` (
  `id` int(11) NOT NULL,
  `tema` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `temas`
--

INSERT INTO `temas` (`id`, `tema`) VALUES
(7, 'Futebol'),
(6, 'Geral'),
(8, 'Mamíferos'),
(9, 'Frutas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `palavras`
--
ALTER TABLE `palavras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `palavras`
--
ALTER TABLE `palavras`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
