-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2021 at 03:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_transaction` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`) VALUES
(7, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(8, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(9, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(10, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(11, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(12, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(13, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(14, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(15, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(16, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(17, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(18, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(19, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(20, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(21, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(22, 25.99, '1MF3329512965693T', 'Completed', 'USD'),
(23, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(24, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(25, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(26, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(27, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(28, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(29, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(30, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(31, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(32, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(33, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(34, 25.99, '4WD57636T9463532N', 'Completed', 'USD'),
(35, 25.99, '6SD12849697972143', 'Completed', 'USD'),
(36, 25.99, '6SD12849697972143', 'Completed', 'USD'),
(37, 25.99, '6SD12849697972143', 'Completed', 'USD'),
(38, 25.99, '6SD12849697972143', 'Completed', 'USD'),
(39, 29.98, '252388411E449824R', 'Completed', 'USD'),
(40, 29.98, '252388411E449824R', 'Completed', 'USD'),
(41, 29.98, '252388411E449824R', 'Completed', 'USD'),
(42, 29.98, '252388411E449824R', 'Completed', 'USD'),
(43, 29.98, '252388411E449824R', 'Completed', 'USD'),
(44, 29.98, '252388411E449824R', 'Completed', 'USD'),
(45, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(46, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(47, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(48, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(49, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(50, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(51, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(52, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(53, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(54, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(55, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(56, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(57, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(58, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(59, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(60, 3.99, '7E179806S64714829', 'Completed', 'USD'),
(61, 3.99, '7E179806S64714829', 'Completed', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `short_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `product_quantity`, `product_description`, `product_image`, `short_desc`) VALUES
(7, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n'),
(8, 'VE4403', 2, 199.89, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida, eros eget pulvinar feugiat, nisi enim vestibulum est, pellentesque accumsan arcu ipsum vel tellus. Curabitur vitae risus placerat, dictum nunc sed, malesuada orci. Donec dictum leo at diam semper, vel aliquet dolor maximus. Etiam placerat magna eget ipsum semper vehicula. Nullam luctus ex et nunc viverra, ut rhoncus nisi egestas. Nulla facilisi. Aenean ultricies ligula eget ornare accumsan. Donec aliquet justo eget quam pellentesque ornare. Proin vitae arcu eget eros porttitor laoreet. Pellentesque cursus pulvinar ante, vel fringilla purus consequat sed. Nullam sed tellus ac lectus convallis venenatis sed non nunc.', 'alex-iby-XhMSz5I1kn8-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur.\r\n\r\n'),
(9, 'LJ343', 1, 157, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis sapien diam, tempor tempus quam efficitur eu. Nullam porta, sapien a vestibulum molestie, nisl ex maximus nunc, quis ornare lacus ligula vel libero. Aliquam velit ante, euismod vitae tempus eget, euismod sed enim. Praesent ut turpis condimentum, ultrices nibh ornare, posuere ligula. Integer id massa in libero bibendum fermentum a sodales libero. Praesent vulputate risus non sem suscipit, a blandit tellus feugiat. Integer pellentesque fringilla dignissim. Donec blandit purus neque, at dictum tortor luctus in. Mauris sit amet ipsum odio.\r\n\r\n', 'peter-miranda-24IsF0xPRO4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut libero.\r\n\r\n'),
(10, 'DO988', 2, 321, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur pharetra nulla eu posuere. Vivamus finibus lacus massa, at ultrices nisl tempor ut. Fusce quis tellus felis. Pellentesque sed dolor pellentesque, pulvinar arcu porttitor, iaculis turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis laoreet tristique consectetur. Fusce sem urna, venenatis vel blandit sit amet, pharetra vel lacus. Duis et nisl lacus. Vestibulum at nibh a magna faucibus porta. Maecenas in nisl at erat aliquet ornare. Cras quam lectus, lobortis in vestibulum non, malesuada eget metus.\r\n\r\n', 'man-g119de4fc5_1920.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer.'),
(11, 'LJ512', 3, 99, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae erat arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ac hendrerit erat. Phasellus in dapibus libero. Suspendisse potenti. Fusce commodo lacus id ligula pretium, eget viverra sem aliquet. Aenean feugiat massa arcu, id placerat dui ultrices semper. Mauris sollicitudin sem laoreet purus mattis viverra. Mauris et dignissim neque, eu fermentum odio. Etiam feugiat est scelerisque, porta purus at, sagittis nunc. Proin nec urna nec tellus maximus pulvinar consectetur et purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus mollis viverra.\r\n\r\n', 'thomas-park-KYEeuGUkZ54-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel vestibulum dui, ut bibendum lacus.\r\n\r\n'),
(12, 'GU221', 3, 154, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed tristique purus, in gravida lectus. Donec nec justo at quam pulvinar porta sed a ante. Mauris ultrices eros a mi fringilla, fringilla laoreet urna interdum. Curabitur non ligula arcu. Cras sit amet felis in justo molestie elementum. Nam eu consequat nisi. Etiam consequat ex non mauris vestibulum lobortis. Aliquam erat volutpat. Suspendisse tellus neque, consequat ac interdum eu, hendrerit tristique eros. In tempor, arcu eget congue iaculis, dolor sapien ornare augue, et vestibulum lectus nunc quis massa. Aliquam sit amet congue quam. Phasellus ac ex enim. Mauris justo nisi, venenatis eu nisi eget, vulputate cursus libero. Vivamus pretium tincidunt iaculis. Vivamus pretium enim id vestibulum malesuada. Mauris vitae lacinia tortor.\\\\r\\\\n\\\\r\\\\n', 'ovidiu-creanga-clZlbmzBAZs-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu accumsan purus. Quisque sed feugiat.\\\\r\\\\n\\\\r\\\\n'),
(13, 'GU122', 1, 300, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fringilla arcu. Nullam augue nulla, tempor maximus commodo maximus, rhoncus in mi. Sed purus libero, sollicitudin tincidunt efficitur vel, tincidunt vel lacus. Quisque placerat, velit quis posuere blandit, libero mauris aliquam justo, eget porta risus augue eu sapien. Nunc eget egestas orci, nec vestibulum arcu. Nunc et vestibulum ante, ac viverra ex. Nunc sagittis lacus eu erat bibendum, vel vestibulum ligula euismod. Morbi nisl nunc, consectetur a orci sed, iaculis mattis ipsum. Nunc volutpat commodo metus, ut convallis nulla pellentesque vitae. Vestibulum imperdiet enim ut pulvinar pellentesque. Curabitur vitae cursus neque, nec pharetra enim.\r\n\r\n', 'apostolos-vamvouras-Pp_nVOuJMTU-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas in est sit amet congue. Aenean eros neque, tincidunt et.\r\n\r\n'),
(14, 'VE4406', 1, 255, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet orci nec orci placerat accumsan at a nisl. Nullam eu augue aliquam, scelerisque odio ut, pharetra odio. Nam nulla tellus, tincidunt quis posuere eu, posuere nec ligula. Aenean vulputate orci vitae est feugiat volutpat. Phasellus sed ullamcorper eros, eget tincidunt justo. Nullam mattis dignissim suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc pulvinar dapibus odio, non rhoncus est. Curabitur vehicula ipsum tortor, vel volutpat urna feugiat id. Praesent ultrices lectus ornare arcu luctus sollicitudin. Curabitur imperdiet in eros ut pharetra. Cras id molestie quam.', 'ali-pazani-GwglcplmXDs-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet odio purus. Etiam porttitor magna dui, in consectetur lorem.'),
(15, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n'),
(16, 'LJ512', 3, 99, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae erat arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ac hendrerit erat. Phasellus in dapibus libero. Suspendisse potenti. Fusce commodo lacus id ligula pretium, eget viverra sem aliquet. Aenean feugiat massa arcu, id placerat dui ultrices semper. Mauris sollicitudin sem laoreet purus mattis viverra. Mauris et dignissim neque, eu fermentum odio. Etiam feugiat est scelerisque, porta purus at, sagittis nunc. Proin nec urna nec tellus maximus pulvinar consectetur et purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus mollis viverra.\r\n\r\n', 'thomas-park-KYEeuGUkZ54-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel vestibulum dui, ut bibendum lacus.\r\n\r\n'),
(17, 'GU221', 3, 154, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed tristique purus, in gravida lectus. Donec nec justo at quam pulvinar porta sed a ante. Mauris ultrices eros a mi fringilla, fringilla laoreet urna interdum. Curabitur non ligula arcu. Cras sit amet felis in justo molestie elementum. Nam eu consequat nisi. Etiam consequat ex non mauris vestibulum lobortis. Aliquam erat volutpat. Suspendisse tellus neque, consequat ac interdum eu, hendrerit tristique eros. In tempor, arcu eget congue iaculis, dolor sapien ornare augue, et vestibulum lectus nunc quis massa. Aliquam sit amet congue quam. Phasellus ac ex enim. Mauris justo nisi, venenatis eu nisi eget, vulputate cursus libero. Vivamus pretium tincidunt iaculis. Vivamus pretium enim id vestibulum malesuada. Mauris vitae lacinia tortor.\\\\r\\\\n\\\\r\\\\n', 'ovidiu-creanga-clZlbmzBAZs-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu accumsan purus. Quisque sed feugiat.\\\\r\\\\n\\\\r\\\\n'),
(18, 'VE4403', 2, 199.89, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida, eros eget pulvinar feugiat, nisi enim vestibulum est, pellentesque accumsan arcu ipsum vel tellus. Curabitur vitae risus placerat, dictum nunc sed, malesuada orci. Donec dictum leo at diam semper, vel aliquet dolor maximus. Etiam placerat magna eget ipsum semper vehicula. Nullam luctus ex et nunc viverra, ut rhoncus nisi egestas. Nulla facilisi. Aenean ultricies ligula eget ornare accumsan. Donec aliquet justo eget quam pellentesque ornare. Proin vitae arcu eget eros porttitor laoreet. Pellentesque cursus pulvinar ante, vel fringilla purus consequat sed. Nullam sed tellus ac lectus convallis venenatis sed non nunc.', 'alex-iby-XhMSz5I1kn8-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consectetur.\r\n\r\n'),
(19, 'LJ512', 3, 99, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae erat arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ac hendrerit erat. Phasellus in dapibus libero. Suspendisse potenti. Fusce commodo lacus id ligula pretium, eget viverra sem aliquet. Aenean feugiat massa arcu, id placerat dui ultrices semper. Mauris sollicitudin sem laoreet purus mattis viverra. Mauris et dignissim neque, eu fermentum odio. Etiam feugiat est scelerisque, porta purus at, sagittis nunc. Proin nec urna nec tellus maximus pulvinar consectetur et purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus mollis viverra.\r\n\r\n', 'thomas-park-KYEeuGUkZ54-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel vestibulum dui, ut bibendum lacus.\r\n\r\n'),
(20, 'GU221', 3, 154, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed tristique purus, in gravida lectus. Donec nec justo at quam pulvinar porta sed a ante. Mauris ultrices eros a mi fringilla, fringilla laoreet urna interdum. Curabitur non ligula arcu. Cras sit amet felis in justo molestie elementum. Nam eu consequat nisi. Etiam consequat ex non mauris vestibulum lobortis. Aliquam erat volutpat. Suspendisse tellus neque, consequat ac interdum eu, hendrerit tristique eros. In tempor, arcu eget congue iaculis, dolor sapien ornare augue, et vestibulum lectus nunc quis massa. Aliquam sit amet congue quam. Phasellus ac ex enim. Mauris justo nisi, venenatis eu nisi eget, vulputate cursus libero. Vivamus pretium tincidunt iaculis. Vivamus pretium enim id vestibulum malesuada. Mauris vitae lacinia tortor.\\\\r\\\\n\\\\r\\\\n', 'ovidiu-creanga-clZlbmzBAZs-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu accumsan purus. Quisque sed feugiat.\\\\r\\\\n\\\\r\\\\n'),
(21, 'GU122', 1, 300, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fringilla arcu. Nullam augue nulla, tempor maximus commodo maximus, rhoncus in mi. Sed purus libero, sollicitudin tincidunt efficitur vel, tincidunt vel lacus. Quisque placerat, velit quis posuere blandit, libero mauris aliquam justo, eget porta risus augue eu sapien. Nunc eget egestas orci, nec vestibulum arcu. Nunc et vestibulum ante, ac viverra ex. Nunc sagittis lacus eu erat bibendum, vel vestibulum ligula euismod. Morbi nisl nunc, consectetur a orci sed, iaculis mattis ipsum. Nunc volutpat commodo metus, ut convallis nulla pellentesque vitae. Vestibulum imperdiet enim ut pulvinar pellentesque. Curabitur vitae cursus neque, nec pharetra enim.\r\n\r\n', 'apostolos-vamvouras-Pp_nVOuJMTU-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas in est sit amet congue. Aenean eros neque, tincidunt et.\r\n\r\n'),
(22, 'RL300', 1, 400, 1, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a quam mattis, pretium risus vitae, ornare orci. Sed vel velit consequat, mollis augue sit amet, tincidunt libero. Fusce tempus tincidunt turpis, et lobortis sapien pulvinar in. Donec facilisis pulvinar euismod. Etiam vel consequat dolor, ut feugiat diam. Curabitur tincidunt purus sit amet massa mattis, facilisis lobortis arcu iaculis. Maecenas aliquet tortor vel sem dapibus, et volutpat orci pretium. In hac habitasse platea dictumst. Nulla sit amet velit eu neque auctor molestie quis at metus. Aenean at commodo arcu. Aenean posuere urna eget aliquet volutpat. Sed sit amet faucibus enim.\r\n\r\nDonec vel lacus et sapien consequat commodo. Aenean ultrices ligula ut suscipit tristique. Duis quis dapibus tortor. Donec in porttitor magna. Vestibulum non nisi sapien. Fusce et pharetra turpis. Curabitur purus lorem, imperdiet sed nulla sed, hendrerit interdum turpis. Praesent at enim feugiat, ultrices enim a, venenatis dui. Aenean magna ligula, tempor eu dapibus id, semper nec enim. Cras lobortis tortor risus, vitae venenatis nisl dapibus gravida. ', 'charles-deluvio-1-nx1QR5dTE-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(23, 'RL400', 1, 30, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nisi nec quam faucibus, et molestie purus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum et dui non finibus. Nullam non lorem ornare, faucibus dolor accumsan, posuere turpis. Donec pretium id orci ac suscipit. Vivamus eu eros vestibulum, suscipit augue sed, aliquet dolor. Sed dui metus, placerat quis ipsum non, imperdiet porta orci. Phasellus non lacinia est. Donec tempor elit ut purus facilisis, sit amet tincidunt massa faucibus. Donec ac nulla sed sapien aliquam rhoncus id sit amet quam. Curabitur vulputate risus dolor, vel dapibus massa bibendum sit amet. Cras porttitor metus eu leo volutpat luctus. Maecenas quis magna nunc. Duis vitae convallis purus, a suscipit turpis. Vivamus ullamcorper nulla sit amet libero dapibus blandit. Cras faucibus diam purus, a interdum nisl pulvinar vel. ', 'claudio-schwarz-e8TtkC5xyv4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(24, 'RL400', 1, 30, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nisi nec quam faucibus, et molestie purus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum et dui non finibus. Nullam non lorem ornare, faucibus dolor accumsan, posuere turpis. Donec pretium id orci ac suscipit. Vivamus eu eros vestibulum, suscipit augue sed, aliquet dolor. Sed dui metus, placerat quis ipsum non, imperdiet porta orci. Phasellus non lacinia est. Donec tempor elit ut purus facilisis, sit amet tincidunt massa faucibus. Donec ac nulla sed sapien aliquam rhoncus id sit amet quam. Curabitur vulputate risus dolor, vel dapibus massa bibendum sit amet. Cras porttitor metus eu leo volutpat luctus. Maecenas quis magna nunc. Duis vitae convallis purus, a suscipit turpis. Vivamus ullamcorper nulla sit amet libero dapibus blandit. Cras faucibus diam purus, a interdum nisl pulvinar vel. ', 'claudio-schwarz-e8TtkC5xyv4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(25, 'RL300', 1, 400, 1, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a quam mattis, pretium risus vitae, ornare orci. Sed vel velit consequat, mollis augue sit amet, tincidunt libero. Fusce tempus tincidunt turpis, et lobortis sapien pulvinar in. Donec facilisis pulvinar euismod. Etiam vel consequat dolor, ut feugiat diam. Curabitur tincidunt purus sit amet massa mattis, facilisis lobortis arcu iaculis. Maecenas aliquet tortor vel sem dapibus, et volutpat orci pretium. In hac habitasse platea dictumst. Nulla sit amet velit eu neque auctor molestie quis at metus. Aenean at commodo arcu. Aenean posuere urna eget aliquet volutpat. Sed sit amet faucibus enim.\r\n\r\nDonec vel lacus et sapien consequat commodo. Aenean ultrices ligula ut suscipit tristique. Duis quis dapibus tortor. Donec in porttitor magna. Vestibulum non nisi sapien. Fusce et pharetra turpis. Curabitur purus lorem, imperdiet sed nulla sed, hendrerit interdum turpis. Praesent at enim feugiat, ultrices enim a, venenatis dui. Aenean magna ligula, tempor eu dapibus id, semper nec enim. Cras lobortis tortor risus, vitae venenatis nisl dapibus gravida. ', 'charles-deluvio-1-nx1QR5dTE-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(26, 'LJ343', 1, 157, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mattis sapien diam, tempor tempus quam efficitur eu. Nullam porta, sapien a vestibulum molestie, nisl ex maximus nunc, quis ornare lacus ligula vel libero. Aliquam velit ante, euismod vitae tempus eget, euismod sed enim. Praesent ut turpis condimentum, ultrices nibh ornare, posuere ligula. Integer id massa in libero bibendum fermentum a sodales libero. Praesent vulputate risus non sem suscipit, a blandit tellus feugiat. Integer pellentesque fringilla dignissim. Donec blandit purus neque, at dictum tortor luctus in. Mauris sit amet ipsum odio.\r\n\r\n', 'peter-miranda-24IsF0xPRO4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut libero.\r\n\r\n'),
(27, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n'),
(28, 'GU122', 1, 300, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fringilla arcu. Nullam augue nulla, tempor maximus commodo maximus, rhoncus in mi. Sed purus libero, sollicitudin tincidunt efficitur vel, tincidunt vel lacus. Quisque placerat, velit quis posuere blandit, libero mauris aliquam justo, eget porta risus augue eu sapien. Nunc eget egestas orci, nec vestibulum arcu. Nunc et vestibulum ante, ac viverra ex. Nunc sagittis lacus eu erat bibendum, vel vestibulum ligula euismod. Morbi nisl nunc, consectetur a orci sed, iaculis mattis ipsum. Nunc volutpat commodo metus, ut convallis nulla pellentesque vitae. Vestibulum imperdiet enim ut pulvinar pellentesque. Curabitur vitae cursus neque, nec pharetra enim.\r\n\r\n', 'apostolos-vamvouras-Pp_nVOuJMTU-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egestas in est sit amet congue. Aenean eros neque, tincidunt et.\r\n\r\n'),
(29, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n'),
(30, 'LJ512', 3, 99, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae erat arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ac hendrerit erat. Phasellus in dapibus libero. Suspendisse potenti. Fusce commodo lacus id ligula pretium, eget viverra sem aliquet. Aenean feugiat massa arcu, id placerat dui ultrices semper. Mauris sollicitudin sem laoreet purus mattis viverra. Mauris et dignissim neque, eu fermentum odio. Etiam feugiat est scelerisque, porta purus at, sagittis nunc. Proin nec urna nec tellus maximus pulvinar consectetur et purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin luctus mollis viverra.\r\n\r\n', 'thomas-park-KYEeuGUkZ54-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel vestibulum dui, ut bibendum lacus.\r\n\r\n'),
(31, 'RL400', 1, 30, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nisi nec quam faucibus, et molestie purus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum et dui non finibus. Nullam non lorem ornare, faucibus dolor accumsan, posuere turpis. Donec pretium id orci ac suscipit. Vivamus eu eros vestibulum, suscipit augue sed, aliquet dolor. Sed dui metus, placerat quis ipsum non, imperdiet porta orci. Phasellus non lacinia est. Donec tempor elit ut purus facilisis, sit amet tincidunt massa faucibus. Donec ac nulla sed sapien aliquam rhoncus id sit amet quam. Curabitur vulputate risus dolor, vel dapibus massa bibendum sit amet. Cras porttitor metus eu leo volutpat luctus. Maecenas quis magna nunc. Duis vitae convallis purus, a suscipit turpis. Vivamus ullamcorper nulla sit amet libero dapibus blandit. Cras faucibus diam purus, a interdum nisl pulvinar vel. ', 'claudio-schwarz-e8TtkC5xyv4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(32, 'RL300', 1, 400, 1, '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a quam mattis, pretium risus vitae, ornare orci. Sed vel velit consequat, mollis augue sit amet, tincidunt libero. Fusce tempus tincidunt turpis, et lobortis sapien pulvinar in. Donec facilisis pulvinar euismod. Etiam vel consequat dolor, ut feugiat diam. Curabitur tincidunt purus sit amet massa mattis, facilisis lobortis arcu iaculis. Maecenas aliquet tortor vel sem dapibus, et volutpat orci pretium. In hac habitasse platea dictumst. Nulla sit amet velit eu neque auctor molestie quis at metus. Aenean at commodo arcu. Aenean posuere urna eget aliquet volutpat. Sed sit amet faucibus enim.\r\n\r\nDonec vel lacus et sapien consequat commodo. Aenean ultrices ligula ut suscipit tristique. Duis quis dapibus tortor. Donec in porttitor magna. Vestibulum non nisi sapien. Fusce et pharetra turpis. Curabitur purus lorem, imperdiet sed nulla sed, hendrerit interdum turpis. Praesent at enim feugiat, ultrices enim a, venenatis dui. Aenean magna ligula, tempor eu dapibus id, semper nec enim. Cras lobortis tortor risus, vitae venenatis nisl dapibus gravida. ', 'charles-deluvio-1-nx1QR5dTE-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(33, 'RL400', 1, 30, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nisi nec quam faucibus, et molestie purus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum et dui non finibus. Nullam non lorem ornare, faucibus dolor accumsan, posuere turpis. Donec pretium id orci ac suscipit. Vivamus eu eros vestibulum, suscipit augue sed, aliquet dolor. Sed dui metus, placerat quis ipsum non, imperdiet porta orci. Phasellus non lacinia est. Donec tempor elit ut purus facilisis, sit amet tincidunt massa faucibus. Donec ac nulla sed sapien aliquam rhoncus id sit amet quam. Curabitur vulputate risus dolor, vel dapibus massa bibendum sit amet. Cras porttitor metus eu leo volutpat luctus. Maecenas quis magna nunc. Duis vitae convallis purus, a suscipit turpis. Vivamus ullamcorper nulla sit amet libero dapibus blandit. Cras faucibus diam purus, a interdum nisl pulvinar vel. ', 'claudio-schwarz-e8TtkC5xyv4-unsplash.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at ex id arcu mollis laoreet vel at ipsum. Morbi dictum. '),
(34, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n'),
(35, 'DO988', 2, 321, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse efficitur pharetra nulla eu posuere. Vivamus finibus lacus massa, at ultrices nisl tempor ut. Fusce quis tellus felis. Pellentesque sed dolor pellentesque, pulvinar arcu porttitor, iaculis turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis laoreet tristique consectetur. Fusce sem urna, venenatis vel blandit sit amet, pharetra vel lacus. Duis et nisl lacus. Vestibulum at nibh a magna faucibus porta. Maecenas in nisl at erat aliquet ornare. Cras quam lectus, lobortis in vestibulum non, malesuada eget metus.\r\n\r\n', 'man-g119de4fc5_1920.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer.'),
(36, 'GU-3311', 1, 188, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta eros est, vel pulvinar tellus tincidunt id. Nunc facilisis varius turpis. Phasellus nulla risus, tempor sed semper ac, ullamcorper in leo. Curabitur laoreet augue quis turpis rhoncus viverra. In tristique luctus mattis. Nunc quis ornare velit. In at porttitor nibh, sed scelerisque dolor. Maecenas orci eros, interdum vel erat non, dictum imperdiet augue. Integer posuere nisl eu lectus facilisis auctor. Morbi vehicula purus volutpat, pretium ipsum pharetra, rutrum justo.\r\n\r\n', 'pexels-alizee-marchand-947885.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `order_id`, `product_id`, `product_title`, `product_price`, `product_quantity`) VALUES
(15, 59, 3, 'product-3', 3.99, 1),
(16, 60, 3, 'product-3', 3.99, 1),
(17, 61, 3, 'product-3', 3.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(1, 'Slider 1', 'image_1.jpg'),
(2, 'Slide 2', 'image_2.jpg'),
(3, 'Slide 3', 'image_3.jpg'),
(19, 'Slider 4', 'image_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_email`, `user_photo`) VALUES
(1, 'lili', '123', 'lili@fake.com', ''),
(7, 'lora', '123', 'lora@fakemail.com', 'user-g428ba559a_1280.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
