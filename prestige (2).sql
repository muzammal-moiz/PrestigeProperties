-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 06:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prestige`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tips for Successful Real Estate Investing', '<p>Explore our latest blog post offering valuable insights and expert advice on navigating the world of real estate investment. Whether you\'re a seasoned investor or just starting out, discover strategies to maximize your returns and build a profitable portfolio.</p>\r\n<p>when it comes to real estate investing, making smart choices is crucial for success. It\'s important to keep an eye on market trends and find areas with potential for growth. Diversifying your investments across different types of properties and locations can also help spread risk.</p>\r\n<blockquote>\r\n<h4>&ldquo;Be fearful when others are greedy and greedy when others are fearful.&rdquo;</h4>\r\n</blockquote>\r\n<p>This means seizing opportunities when others might hesitate, and staying patient for the right moment to make a move. With careful planning and a long-term mindset, real estate investing can be a rewarding journey towards financial stability.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>', '1710845075rental2.jpg', '2024-03-19 05:02:22', '2024-03-19 11:25:02'),
(3, 'Top 10 Tips for First-Time Homebuyers', '<p>Explore our latest blog post offering valuable insights and expert advice on navigating the world of real estate investment. Whether you\'re a seasoned investor or just starting out, discover strategies to maximize your returns and build a profitable portfolio.</p>\r\n<p>when it comes to real estate investing, making smart choices is crucial for success. It\'s important to keep an eye on market trends and find areas with potential for growth. Diversifying your investments across different types of properties and locations can also help spread risk.</p>\r\n<blockquote>\r\n<h4>&ldquo;Be fearful when others are greedy and greedy when others are fearful.&rdquo;</h4>\r\n</blockquote>\r\n<p>This means seizing opportunities when others might hesitate, and staying patient for the right moment to make a move. With careful planning and a long-term mindset, real estate investing can be a rewarding journey towards financial stability.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>', '1710845049pdfc3.jpg', '2024-03-19 05:02:49', '2024-03-19 05:44:09'),
(4, 'Investing in Real Estate: A Beginner\'s Guide', '<p>Explore our latest blog post offering valuable insights and expert advice on navigating the world of real estate investment. Whether you\'re a seasoned investor or just starting out, discover strategies to maximize your returns and build a profitable portfolio.</p>\r\n<p>when it comes to real estate investing, making smart choices is crucial for success. It\'s important to keep an eye on market trends and find areas with potential for growth. Diversifying your investments across different types of properties and locations can also help spread risk.</p>\r\n<blockquote>\r\n<h4>&ldquo;Be fearful when others are greedy and greedy when others are fearful.&rdquo;</h4>\r\n</blockquote>\r\n<p>This means seizing opportunities when others might hesitate, and staying patient for the right moment to make a move. With careful planning and a long-term mindset, real estate investing can be a rewarding journey towards financial stability.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>\r\n<p>Another essential aspect of successful real estate investing is thorough research and due diligence. Before making any investment decisions, it\'s crucial to conduct comprehensive analysis of the properties and markets you\'re considering. This includes examining factors such as property condition, rental potential, neighborhood growth prospects, and economic indicators. Additionally, seeking guidance from experienced professionals, such as real estate agents or financial advisors, can provide valuable insights and help you make informed choices. By taking the time to do your homework and seeking expert advice, you can minimize risks and maximize the potential returns on your real estate investments.</p>', '1710845019blogdetailimage.jpg', '2024-03-19 05:12:47', '2024-03-19 05:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(11, 'Maia Hensley', 'cuhel@mailinator.com', 'Quas ea atque quaera', 'Et exercitationem ad', '2024-03-22 11:25:06', '2024-03-22 11:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_properties`
--

CREATE TABLE `favourite_properties` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourite_properties`
--

INSERT INTO `favourite_properties` (`id`, `userid`, `propertyid`, `created_at`, `updated_at`) VALUES
(5, 3, 12, '2024-03-24 23:45:54', '2024-03-24 23:45:54'),
(7, 3, 18, '2024-03-24 23:47:07', '2024-03-24 23:47:07'),
(8, 3, 15, '2024-03-25 00:02:00', '2024-03-25 00:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `propertyid` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `userid`, `propertyid`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 11, 'Otto Rhodes', 'syfaw@mailinator.com', '+1 (685) 902-9502', 'Delectus qui lorem', '2024-03-24 08:04:34', '2024-03-24 08:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `slug` text DEFAULT NULL,
  `heading` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `feature_non_feature` enum('feature','nonfeature') NOT NULL DEFAULT 'nonfeature',
  `added_by_image` text DEFAULT NULL,
  `added_by_name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rooms` int(11) DEFAULT NULL,
  `garage_size` int(11) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `year_built` bigint(20) DEFAULT NULL,
  `bathrooms` int(11) DEFAULT NULL,
  `property_size` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `slug`, `heading`, `type`, `feature_non_feature`, `added_by_image`, `added_by_name`, `image`, `description`, `rooms`, `garage_size`, `price`, `bedrooms`, `year_built`, `bathrooms`, `property_size`, `created_at`, `updated_at`) VALUES
(11, 'mount-terrace', 'Mount Terrace', 'Sale', 'feature', '1710951319author-2.jpg', 'Zeyad', '1710951319blogdetailimage.jpg', '<p>This stunning house is situated in a prime location, offering the perfect blend of modern living and peaceful surroundings. Its sought-after address in one of the city\'s finest neighborhoods makes it a rare find for those seeking luxury and exclusivity. With easy access to essential amenities, renowned schools, bustling shopping areas, and recreational facilities, residents can enjoy a lifestyle of unmatched convenience and comfort.</p>\r\n<p>Inside, you\'ll find a meticulously designed interior that radiates elegance and sophistication. Spacious living areas, tall ceilings, and large windows create a welcoming ambiance flooded with natural light. The well-thought-out layout includes multiple bedrooms, each providing privacy and serenity, along with modern bathrooms featuring luxurious fixtures and fittings.</p>\r\n<p>This stunning house is situated in a prime location, offering the perfect blend of modern living and peaceful surroundings. Its sought-after address in one of the city\'s finest neighborhoods makes it a rare find for those seeking luxury and exclusivity. With easy access to essential amenities, renowned schools, bustling shopping areas, and recreational facilities, residents can enjoy a lifestyle of unmatched convenience and comfort.</p>\r\n<p>Inside, you\'ll find a meticulously designed interior that radiates elegance and sophistication. Spacious living areas, tall ceilings, and large windows create a welcoming ambiance flooded with natural light. The well-thought-out layout includes multiple bedrooms, each providing privacy and serenity, along with modern bathrooms featuring luxurious fixtures and fittings.</p>', 6, 150, 30000000, 4, 2012, 5, 2500, '2024-03-20 11:15:19', '2024-03-20 16:49:06'),
(12, 'scholars-place', 'Scholars Place', 'Sale', 'nonfeature', '1710951653author-1.jpg', 'Olivia Perez', '1711107470pd1.jpg', '<p>This stunning house is situated in a prime location, offering the perfect blend of modern living and peaceful surroundings. Its sought-after address in one of the city\'s finest neighborhoods makes it a rare find for those seeking luxury and exclusivity. With easy access to essential amenities, renowned schools, bustling shopping areas, and recreational facilities, residents can enjoy a lifestyle of unmatched convenience and comfort.</p>\r\n<p>Inside, you\'ll find a meticulously designed interior that radiates elegance and sophistication. Spacious living areas, tall ceilings, and large windows create a welcoming ambiance flooded with natural light. The well-thought-out layout includes multiple bedrooms, each providing privacy and serenity, along with modern bathrooms featuring luxurious fixtures and fittings.</p>\r\n<p>This stunning house is situated in a prime location, offering the perfect blend of modern living and peaceful surroundings. Its sought-after address in one of the city\'s finest neighborhoods makes it a rare find for those seeking luxury and exclusivity. With easy access to essential amenities, renowned schools, bustling shopping areas, and recreational facilities, residents can enjoy a lifestyle of unmatched convenience and comfort.</p>\r\n<p>Inside, you\'ll find a meticulously designed interior that radiates elegance and sophistication. Spacious living areas, tall ceilings, and large windows create a welcoming ambiance flooded with natural light. The well-thought-out layout includes multiple bedrooms, each providing privacy and serenity, along with modern bathrooms featuring luxurious fixtures and fittings.</p>', 8, 500, 695000, 6, 2018, 8, 4500, '2024-03-20 11:20:53', '2024-03-22 06:37:50'),
(13, 'buxshalls-estate', 'Buxshalls Estate', 'Sale', 'nonfeature', '1710951916author-1.jpg', 'Abbe Hall', '1710951916about-11.jpg', '<div>\r\n<div class=\"sv-long-description\">\r\n<ul class=\"sv-long-description__points\">\r\n<li class=\"sv-long-description__point sv-description-point\">\r\n<div class=\"sv-description-point__body\">\r\n<p>Nestled in the West Sussex countryside, just outside of the picturesque village of Lindfield, the Buxshalls Estate has created a truly unique community of residences.<br><br>A blend of period restorations and new build properties, there are an array of one-, two-, three-, and four-bedroom residences available. Ranging from three-storey houses to lateral apartments and bungalows.<br><br>General specification<br>Solid wood internal doors<br>Smith and Locke chrome door handles to houses, dark nickel door handles to Buxshalls House and Mews<br>Velfac windows to houses, pre-finished timber by Dale Joinery to Buxshalls House and Mews<br>Engineered oak flooring to living rooms, kitchens and hallways<br>Cormar carpets to bedrooms<br>Dove grey shaker door wardrobes to principal bedrooms<br>Magnetic tilt LED downlighters to hallways, living rooms and bedrooms<br>Painted skirtings and architraves<br>Entryphone system to Buxshalls House and Mews<br><br>Kitchens<br>Shaker kitchens with granite worktops, some with islands<br>A range of Bosch and Hotpoint appliances including:<br>Multi-function fan oven<br>Induction or electric hob<br>Extractor hood<br>Full height fridge/freezer<br>Dishwasher<br>Washer/dryer or washing machine<br>Microwave<br>Ceramic Belfast or stainless steel sink<br>Magnetic tilt LED downlighters<br>Pendant lights over islands<br><br>Bathrooms, shower rooms and guest WC<br>Villeroy and Boch wall hung WC<br>Villeroy and Boch semi-recessed basin with Pura Arco single lever tap to houses, basin mounted on vanity unit with black Arcove single lever tap to Buxshalls House and Mews<br>Double ended acrylic baths with exofil Merlyn bath screens<br>Chrome Pura Arco bath and shower mixer to houses, black to Buxshalls House and Mews<br>White Merlyn shower trays and glazed enclosures<br>Chrome Pura Arco shower mixer with fixed head and hand shower, black to Buxshalls House and Mews<br>Ceramic wall and floor tiles<br>Low voltage LED downlighters<br>Single point extractor fans to houses, MHRV units to Buxshalls House and Mews (exc. apartments 4 and 10)<br>LED illuminated mirrors with demisters to houses, standard mirrors to Buxshalls House and Mews<br>Chrome heated towel rail<br>Underfloor heating<br><br>Heating and Electrical<br>Underfloor heating throughout or electric panel heating (smaller units)<br>Samsung air source heat pumps<br>Samsung integral water storage units<br>Deta slimline switches and sockets<br>Cat 6 data cabling to living rooms, kitchens and bedrooms<br>FFTP (Full fibre to the premises) provided by BT Open Reach<br>TV/Sky TV/DAB points to living rooms, kitchens and bedrooms<br>BT master socket to utility cupboard<br><br>External<br>Professionally landscaped gardens and grounds<br>Lawns top soiled and seeded<br>Indian sandstone patios and terraces where relevant<br>Stainless steel LED downlights to houses and apartments with terraces<br><br>Peace of mind<br>Freehold title to houses<br>999 year leases or share of freehold depending on unit<br>6 year structural warranty from PCC (Courtyard 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 &amp; 12, The Coach House 1, 2 &amp; 3 and Garden Cottage) or 10 year structural warranty from ICW (Cedar Place 1, 2, 3 &amp; 4, The Orchard 1, 2 &amp; 3 and Jolland Lodge)<br>12 month snagging and defects period<br>Communal grounds managed by Sennen<br><br>These details are intended to give a general indication of the proposed specification. The developer operates a policy of continuous product development and reserves the right to alter any part of the development specification at any time. Where brands are specified the developer reserves the right to replace the brand with another of equal quality or better.</p>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<blockquote class=\"Quotestyled__QuoteWrapper-sc-1tzopgi-0 jjdGdm\">\r\n<p class=\"Quotestyled__QuoteText-sc-1tzopgi-1 jKLqrs\">Savills are delighted to be selling this special developmen</p>\r\n</blockquote>', 12, 1100, 499950, 9, 2020, 8, 7600, '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(14, 'hallam-street', 'Hallam Street', 'Rent', 'feature', '1710952197author-1.jpg', 'Natalia Maciak', '1711122274pfrds3.jpg', '<p>This bright apartment is well appointed and has been redecorated and well looked after by the current owners. It is located within a sought after portered building with a lift, and benefits from an abundance of natural light being in a standalone position in the block with no neighbours above or beside you making the apartment and the terrace wonderfully private.</p>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Hallam Street is superbly located for the world class amenities of Marylebone, Fitzrovia and the West End, together with the greenery of Regent\'s Park.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">The transport links are excellent from nearby Great Portland Street (0.3 miles), Regent\'s Park (0.4 miles) and Oxford Circus (0.5 miles) underground stations. Euston (0.6 miles) and King\'s Cross St Pancras (1.5 miles) train stations, as well as access to the West and Heathrow via the A40.</li>\r\n</ul>\r\n<h2 class=\"sv-content-row__heading\">Additional information</h2>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">EPC Rating: E</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Leasehold. Lease Expiry: 24/06/2113 (89 years remaining)</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Service Charge: &pound;8,000.00pa</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Ground Rent: TBC</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Council Tax Band: E</li>\r\n</ul>', 4, 500, 645000, 7, 2016, 4, 3300, '2024-03-20 11:29:57', '2024-03-22 10:44:34'),
(15, 'hambledon-park', 'Hambledon Park', 'Rent', 'nonfeature', '1710952356author-1.jpg', 'Ed Tighe', '1711122290pdfc1.jpg', '<p>The Priory represents a unique home designed and built in 1997 by renowned developers, Berkeley Homes, in a striking Regency style which is located in a premier position within Hambledon Park.<br><br>Internal accommodation is beautifully presented and extends to approximately 3600 sq ft and has been extremely well maintained by the current owners. The welcoming entrance hall is wonderfully light and gives an immediate sense of arrival with its central staircase and galleried landing. The drawing room is generous in size, both light and airy with four large windows overlooking the garden, it has a charming fireplace with marble surround and delightful access to the patio and garden beyond. The kitchen and family room is very much the heart of the house, designed in a traditional country style with wooden cabinetry, a breakfast bar and ample space for dining and entertaining. To the rear is a utility room with access outside. The dining room and study are both double aspect and face the front of the house.<br><br>On the first floor is the principal bedroom enjoying garden views with built-in wardrobes and a large en suite with bath, walk in shower and twin sinks. There are four further bedrooms (one en suite) and the family bathroom.<br><br>The Priory sits well within its plot of approximately 1.7 acres, the rear garden is tranquil and private offering a serene space to enjoy the spring and summer months with an abundance of colour throughout the seasons. The terrace runs the length of the house with a delightful pergola. Two notable features of the property are the water tower, a unique construction over four floors which is currently used as a store room as well as the paddock to the front of the house.<br><br>The property is accessed via a wooden gate leading to a driveway with parking for several vehicles. Set back from the driveway is a double garage with a spacious home office / studio room above.</p>\r\n<h2 class=\"sv-content-row__heading\">Additional information</h2>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">EPC Rating: C</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Freehold</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Council Tax Band: H</li>\r\n</ul>', 12, 300, 2500000, 2, 2011, 4, 1200, '2024-03-20 11:32:36', '2024-03-22 10:44:50'),
(16, 'madrid-road', 'Madrid Road', 'Rent', 'nonfeature', '1710952515author-1.jpg', 'Sam Bide', '1711122304pfr4.jpg', '<p>This wonderful family home has been refurbished and extended, offering excellent living and entertaining space across three floors. The property is set back from the road with an attractive landscaped front garden and opens into a spacious entrance hall with a great sense of light and space.<br><br>To the front is the spacious reception room which has an attractive square bay window and an integrated gas fireplace. To the rear of the house is a contemporary kitchen/dining/family room providing a wonderful family and entertaining space with bespoke wall and base level units, a large central island unit and fully fitted appliances. This spacious room is flooded with light from skylights and full width Crittal style doors which lead out to the west facing garden. Alongside the kitchen/dining room is a utility room and cloakroom.<br><br>Upstairs, the generous principal bedroom suite has a dressing room and an en suite shower room. There are a further two bedrooms and a family bathroom on this floor. On the top floor are a further two bedrooms, along with a stylish shower room and eaves storage.<br><br>The west facing garden is perfect for entertaining with a large terrace overlooking the garden which is laid to lawn and planted with a variety of trees and shrubs. To the rear of the garden is a large studio with a shower room which can be used as an office, playroom or an additional bedroom.<br><br>The ground floor and bedrooms have all been laid with wooden flooring. There is also water underfloor heating throughout the ground floor.</p>\r\n<div class=\"sv-property-details__section\">\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Madrid Road is conveniently situated for Barnes village which offers a range of shops, restaurants, bars and the Olympic Cinema, as well as Barnes duck pond, green and common and the River Thames towpath walks.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Barnes Station and Barnes Bridge Station offer a frequent service into Waterloo. There are also bus services serving Putney, Richmond and Hammersmith, all of which offer underground connections. Heathrow airport is also easily accessible.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">The schools in the area include: St Paul\'s School, The Harrodian, The Swedish School and Ibstock Place School. For younger pupils, St Paul\'s Juniors, St Osmunds\' (RC), Lowther Primary School and Barnes Primary School.</li>\r\n</ul>\r\n</div>\r\n<div class=\"sv-property-details__section\">\r\n<h2 class=\"sv-content-row__heading\">&nbsp; &nbsp;Additional information</h2>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">EPC Rating: D</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Freehold</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Council Tax Band: G</li>\r\n</ul>\r\n</div>', 12, 350, 2600000, 8, 2019, 6, 2200, '2024-03-20 11:35:15', '2024-03-22 10:45:04'),
(17, 'the-orchard-grove', 'The Orchard Grove', 'Commercial', 'feature', '1710952735author-1.jpg', 'Phil Bates', '1710952735pd1.jpg', '<p>Discreetly positioned on quiet residential cul-de-sac, 8 The Orchard Grove is a pleasant four bedroom detached family home. Offered to the market without an onward chain, the accommodation equates to a comfortable 1,204 sq. ft of living space.<br><br>The sitting room affords pleasant views over the front garden and has double doors opening to the dining room. The kitchen is fitted with a range of units to include a double oven, freestanding dishwasher and separate hob. In addition there is a fitted utility room and a useful office.<br><br>The first floor consists of four bedrooms and a family bathroom. The principal bedroom is served by a well-appointed shower room.<br><br>The private approach is laid to a tarmacadam driveway which leads to the freestanding double garage. With up and over doors, it has a pedestrian side door and plentiful storage overhead. An attractive paved path leads to the front entrance, complemented by herbaceous borders and deep-set beds. The garden is a notable feature of the property, principally laid to lawn with pretty flower beds, it is bounded by hedgerow, fencing and an attractive stone wall.<br><br>A striking addition is the stone built barn sitting in the rear garden. A historic feature, it offers fantastic conversion potential together with an array of original features. Double doors open to a vast space, dry and in good condition, the barn is currently used as a games room and a superb storage area.</p>', 12, 500, 595000, 9, 2021, 5, 4400, '2024-03-20 11:38:55', '2024-03-20 11:51:32'),
(18, 'london-square-earlsfield', 'London Square Earlsfield', 'Commercial', 'nonfeature', '1710952947author-1.jpg', 'John Doe', '1710952947pd2.jpg', '<p>A generously proportioned 5 bedroom detached house with off street parking. Nestled beside the new 32 acre Springfield Park, London Square Earlsfield.</p>\r\n<ul class=\"sv-long-description__points\">\r\n<li class=\"sv-long-description__point sv-description-point\">\r\n<div class=\"sv-description-point__body\">\r\n<p>Contemporary design gives way to luxurious style cues and ultra premium finishes, where every detail is exacting, and every touch is elevated.<br><br>London Square Earlsfield is more than urban London reimagined. It\'s a living, breathing, vibrant community where wellness is given space to flourish.<br><br>It\'s the place to grow, now and for the future.</p>\r\n<h2 class=\"sv-content-row__heading\">Additional information</h2>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Freehold</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Council Tax Band: TBC</li>\r\n</ul>\r\n</div>\r\n</li>\r\n</ul>', 13, 350, 2350000, 7, 2021, 7, 7800, '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(19, 'muddiford', 'Muddiford', 'Commercial', 'nonfeature', '1710953101author-1.jpg', 'Chris Clifford', '1710953101pdfc1.jpg', '<p>Broomhill Art Hotel, dating from 1913, is accentuated by art d&eacute;cor throughout, with themed lounges, bedrooms and a nationally renowned Sculpture Garden.<br><br>The Property commands a prominent hillside position, boasting spectacular views of the valley, sitting within ground extending to circa 8.2 acres. The Property has benefited from significant recent refurbishment under its current ownership to transform the Hotel into a boutique, art oriented offering.<br><br>The Hotel offers 7 feature bedrooms, each influenced by an art-house film. In addition, the Hotel comprises a restaurant, bar and three lounges. The Gallery, situated adjacent to the hotel entrance, offers a light and airy space which would suit a variety of uses.<br><br>Within the hotel building is a self-contained annexe with kitchen, two lounges and two bedrooms. Externally, the Property features an outdoor swimming pool (currently disused), tennis court, workshop and barn. The Property would suit conversion to an attractive and substantial family home in a delightful setting, subject to obtaining planning permission.<br><br>The estate is available in two lots: Lot 1  Broomhill Hotel, Restaurant, Sculpture Garden and meadow, circa 8.2 acres. Lot 2  Water Meadows Extension, circa 9.5 acres<br><br>Lot 1 is being advertised for auction with Savills on 16th April 2024. At auction, the Property will be auctioned with vacant possession, with contents removed. There is an opportunity to purchase the Hotel and contents prior to the auction date (16th April 2024) at a guide price of &pound;1.3 million. Please enquire if you have any questions.</p>\r\n<div class=\"sv-property-details__section\">\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Accessed along a tree-lined driveway through the Sculpture Garden, Broomhill Art Hotel is situated in the rolling hills of the North Devon countryside. Accessed via the B3230, the Property affords excellent connectivity. The nearest train station is Barnstable Station which is approximately 3.8 miles from the Property. Exeter Airport is 48 miles from the Property and provides domestic and international flight routes.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">The Property is located in North Devon, a dramatic landscape of coastline, woodland and moorland. Dotted along the coastline are long sandy beaches, which are popular for surfing, as well as local fishing towns providing independent shops and caf&eacute;s. Barnstaple, located 3.4 miles from the Property, provides a vibrant town with local markets, museums and a bustling high street. Further afield is the Isley Marsh Nature Reserve on the River Taw estuary. It is reachable via the Tarka Trail, a 180 mile route through unspoilt countryside, dramatic sea cliffs and the longest, continuous cycling path in the UK. RHS Garden Rosemoor, one of only 4 RHS gardens open to the public nationwide is 16 miles south of the Property.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Located 11 miles from the Property is Woolacombe Sands, a beautiful stretch of golden beaches providing a great place to surf, kayak, swim or explore rock pools. Exmoor National Park is located approximately 7.8 miles from the Property, offering ancient woodland, rolling moorland, and plunging sea cliffs. The moors are perfect for hiking, riding, cycling and running. The picturesque village of Clovelly, located circa 24 miles from the Property, comprises a privately owned fishing village, offering outstanding Victorian kitchen gardens, quay and bay, fisherman\'s cottage, Kingsley Museum, and provides trips to Lundy Island.</li>\r\n</ul>\r\n</div>\r\n<div class=\"sv-property-details__section\">\r\n<h2 class=\"sv-content-row__heading\">Additional information</h2>\r\n<ul class=\"Bulletsstyled__BulletsList-sc-ilsip6-0 kiOFdo\">\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Services: Lot 1: Mains electricity and water, oil fired central heating, private drainage.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Freehold.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Viewings: Strictly by appointment with Savills. Prior to making an appointment to view, we strongly recommend that you discuss any particular points which are likely to affect your interest in the property with a member of staff who has seen the property in order that you do not make a wasted journey.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Trade: The business is currently closed, prior to its closure, the hotel traded as a hotel, restaurant, wedding, arts and events venue. The business traded through its own dedicated website which can be found at: https://broomhillestate.com/</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">VAT: Should the sale of the Property or any right attached to it be deemed a chargeable supply for VAT purposes, such tax will be payable by the purchaser in addition to the sale price.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Fixtures and Fittings: Trade inventory will be included in the sale. Stock at valuation on completion. The contents of the</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Sculpture Gardens are included within the sale with the exception of the Ronald Westerhuis and Sandy Brown sculpture collections as well as those sculptures owned personally by the Vendor.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Excluded from the sale is a selection of artwork, memorabilia, furniture and other items. A full list can be provided to bona fide purchasers upon request. A selection of these items are available by separate negotiation.</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Rateable Value: &pound;30,000 for the Hotel and premises (April 2023 onwards).</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">EPC Exempt</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Tenure: Freehold</li>\r\n<li class=\"Bulletsstyled__BulletsListItem-sc-ilsip6-1 dKPVaT\">Council Tax Band: TBC</li>\r\n</ul>\r\n</div>', 13, 438, 1300000, 6, 2018, 5, 4380, '2024-03-20 11:45:01', '2024-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `properties_amenities`
--

CREATE TABLE `properties_amenities` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_amenities`
--

INSERT INTO `properties_amenities` (`id`, `property_id`, `heading`, `created_at`, `updated_at`) VALUES
(17, 11, 'Air Conditioning', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(18, 11, 'Cleaning Service', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(19, 11, 'Dishwasher', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(20, 11, 'Hardwood Flows', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(21, 11, 'Microwave', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(22, 11, 'Refrigerator', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(23, 12, 'Air Conditioning', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(24, 12, 'Cleaning Service', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(25, 12, 'Dishwasher', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(26, 12, 'Hardwood Flows', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(27, 13, 'Microwave', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(28, 13, 'Refrigerator', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(29, 13, 'Hardwood Flows', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(30, 14, 'Air Conditioning', '2024-03-20 11:29:57', '2024-03-20 11:29:57'),
(31, 14, 'Cleaning Service', '2024-03-20 11:29:57', '2024-03-20 11:29:57'),
(32, 14, 'Dishwasher', '2024-03-20 11:29:57', '2024-03-20 11:29:57'),
(33, 14, 'Hardwood Flows', '2024-03-20 11:29:57', '2024-03-20 11:29:57'),
(34, 15, 'Hardwood Flows', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(35, 15, 'Dishwasher', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(36, 15, 'Microwave', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(37, 16, 'Refrigerator', '2024-03-20 11:35:15', '2024-03-20 11:35:15'),
(38, 16, 'Microwave', '2024-03-20 11:35:16', '2024-03-20 11:35:16'),
(39, 16, 'Hardwood Flows', '2024-03-20 11:35:16', '2024-03-20 11:35:16'),
(40, 17, 'Hardwood Flows', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(41, 17, 'Microwave', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(42, 17, 'Refrigerator', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(43, 17, 'Cleaning Service', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(44, 18, 'Cleaning Service', '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(45, 18, 'Microwave', '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(46, 18, 'Refrigerator', '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(47, 19, 'Microwave', '2024-03-20 11:45:01', '2024-03-20 11:45:01'),
(48, 19, 'Refrigerator', '2024-03-20 11:45:01', '2024-03-20 11:45:01'),
(49, 19, 'Hardwood Flows', '2024-03-20 11:45:01', '2024-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `properties_images`
--

CREATE TABLE `properties_images` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_images`
--

INSERT INTO `properties_images` (`id`, `property_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 11, '1710951319pfrds4.jpg', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(11, 11, '1710951319pfrds5.jpg', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(12, 12, '1710951653pfrds2.jpg', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(13, 12, '1710951653pfrds3.jpg', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(14, 13, '1710951916pfrd1.jpg', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(15, 13, '1710951916pfrds1.jpg', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(16, 14, '1710952198pdfc5.jpg', '2024-03-20 11:29:58', '2024-03-20 11:29:58'),
(17, 14, '1710952198pdfc6.jpg', '2024-03-20 11:29:58', '2024-03-20 11:29:58'),
(18, 15, '1710952356pdfc3.jpg', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(19, 15, '1710952356pdfc4.jpg', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(20, 16, '1710952516pdfc6.jpg', '2024-03-20 11:35:16', '2024-03-20 11:35:16'),
(21, 16, '1710952516pfr4.jpg', '2024-03-20 11:35:16', '2024-03-20 11:35:16'),
(22, 17, '1710952735pd3.jpg', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(23, 17, '1710952735pdfc1.jpg', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(24, 18, '1710952948pd2.jpg', '2024-03-20 11:42:28', '2024-03-20 11:42:28'),
(25, 18, '1710952948pdfc1.jpg', '2024-03-20 11:42:28', '2024-03-20 11:42:28'),
(26, 19, '1710953101pd2.jpg', '2024-03-20 11:45:01', '2024-03-20 11:45:01'),
(27, 19, '1710953101pd3.jpg', '2024-03-20 11:45:01', '2024-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `properties_location`
--

CREATE TABLE `properties_location` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_location`
--

INSERT INTO `properties_location` (`id`, `property_id`, `country`, `state`, `city`, `address`, `created_at`, `updated_at`) VALUES
(10, 11, 'United Kingdom', 'England', 'Birmingham', 'Birmingham, UK', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(11, 12, 'United Kingdom', 'England', 'Birmingham', 'Walton-on-Thames, Surrey KT12 3FD, UK', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(12, 13, 'United Kingdom', 'England', 'Birmingham', 'Ardingly Road, Haywards Heath, UK', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(13, 14, 'United Kingdom', 'London', 'London', 'London, W1W 5HE', '2024-03-20 11:29:57', '2024-03-20 11:29:57'),
(14, 15, 'United Kingdom', 'Scotland', 'Godalming', 'Hambledon Park, Hambledon, Godalming, Surrey GU8 4ER, UK', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(15, 16, 'United Kingdom', 'Wales', 'London', 'Madrid Road, London SW13 9PG, UK', '2024-03-20 11:35:15', '2024-03-20 11:35:15'),
(16, 17, 'United Kingdom', 'England', 'Birmingham', 'The Orchard Grove, Shurdington, Cheltenham, Gloucestershire GL51 4TN, UK', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(17, 18, 'United Kingdom', 'Northern Ireland', 'London', 'Springfield Village, London, SW17 7DJ', '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(18, 19, 'United Kingdom', 'Northern Ireland', 'Birmingham', 'Muddiford, Barnstaple, Devon EX31 4EX, UK', '2024-03-20 11:45:01', '2024-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `properties_plans`
--

CREATE TABLE `properties_plans` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `heading` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties_plans`
--

INSERT INTO `properties_plans` (`id`, `property_id`, `heading`, `image`, `created_at`, `updated_at`) VALUES
(10, 11, 'First Floor', '1710951319floor-1.png', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(11, 11, 'Second Floor', '1710951319fpc.jpg', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(12, 11, 'Third Floor', '1710951319floor-1.png', '2024-03-20 11:15:19', '2024-03-20 11:15:19'),
(13, 12, 'First Floor', '1710951653fpc.jpg', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(14, 12, 'Second Floor', '1710951653floor-1.png', '2024-03-20 11:20:53', '2024-03-20 11:20:53'),
(15, 13, 'First Floor', '1710951916floor-1.png', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(16, 13, 'Second Floor', '1710951916fpc.jpg', '2024-03-20 11:25:16', '2024-03-20 11:25:16'),
(17, 14, 'First Floor', '1710952197fpc.jpg', '2024-03-20 11:29:58', '2024-03-20 11:29:58'),
(18, 14, 'Second Floor', '1710952198floor-1.png', '2024-03-20 11:29:58', '2024-03-20 11:29:58'),
(19, 15, 'First Floor', '1710952356floor-1.png', '2024-03-20 11:32:36', '2024-03-20 11:32:36'),
(20, 17, 'Floor Plan', '1710952735floor-1.png', '2024-03-20 11:38:55', '2024-03-20 11:38:55'),
(21, 18, 'Floor Plan', '1710952947floor-1.png', '2024-03-20 11:42:27', '2024-03-20 11:42:27'),
(22, 18, 'Floor Plan', '1710952948fpc.jpg', '2024-03-20 11:42:28', '2024-03-20 11:42:28'),
(23, 19, 'Floor Plan 1', '1710953101fpc.jpg', '2024-03-20 11:45:01', '2024-03-20 11:45:01'),
(24, 19, 'Floor Plan 2', '1710953101floor-1.png', '2024-03-20 11:45:01', '2024-03-20 11:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1qTFWVOdDknNc65d4Mtcynl4d70bReeoqxbvQ7KV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGxOWDNldDFrVklJV1RKa3Y0TGxaazB2V0xJNHpRQ0hRZnBpRVAyZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbGVhciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1710829314),
('GTaQdtGsn9jgNJB6HrqR49HDriXafCzqiR4XpFEu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNlJQYkRRTVQwWGxBbUhNQnFhZXAxWjVoblYyWDRCS1NlMDJCM1JQciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9Ib21lIjt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1710831813);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `white_logo` text DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `phone`, `email`, `location`, `facebook`, `twitter`, `instagram`, `whatsapp`, `youtube`, `logo`, `white_logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'Prestige Properties', '+44-3456-7890', 'info@prestigeproperties.com', 'Birmingham, UK', NULL, NULL, NULL, '4434567890', NULL, '1710840006logo-33.png', '1710840220logo-22.png', '1710840083favlogo1.png', '2023-03-20 06:55:50', '2024-03-19 04:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `type` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `image`, `type`) VALUES
(1, 'Zeyad', 'admin@gmail.com', NULL, '$2y$12$sD4vO3XxweOad.KdHUl.Nu8tBnaZKeXllbU8aCfqG3h.CSHV8mm5.', NULL, NULL, '2024-03-19 11:22:47', '+1234567890', 'Birmingham, UK', '1710839785WhatsApp Image 2024-03-12 at 21.26.04_bc4554e5.jpg', 'admin'),
(3, 'khateeb ullah', 'chkhateeb96@gmail.com', NULL, '$2y$12$LYG1qBW5XXfVXzmiIa6W8eOrWWtvhzzvrKAlZHqmb4qgk9xrCzJ3a', NULL, '2024-03-23 12:39:02', '2024-03-23 12:51:33', '3474570876', NULL, '1711216293author-2.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourite_properties`
--
ALTER TABLE `favourite_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `propertyid` (`propertyid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertyid` (`propertyid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_amenities`
--
ALTER TABLE `properties_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `properties_images`
--
ALTER TABLE `properties_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `properties_location`
--
ALTER TABLE `properties_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `properties_plans`
--
ALTER TABLE `properties_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourite_properties`
--
ALTER TABLE `favourite_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `properties_amenities`
--
ALTER TABLE `properties_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `properties_images`
--
ALTER TABLE `properties_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `properties_location`
--
ALTER TABLE `properties_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `properties_plans`
--
ALTER TABLE `properties_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourite_properties`
--
ALTER TABLE `favourite_properties`
  ADD CONSTRAINT `favourite_properties_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourite_properties_ibfk_2` FOREIGN KEY (`propertyid`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`propertyid`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inquiry_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties_amenities`
--
ALTER TABLE `properties_amenities`
  ADD CONSTRAINT `properties_amenities_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties_images`
--
ALTER TABLE `properties_images`
  ADD CONSTRAINT `properties_images_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties_location`
--
ALTER TABLE `properties_location`
  ADD CONSTRAINT `properties_location_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `properties_plans`
--
ALTER TABLE `properties_plans`
  ADD CONSTRAINT `properties_plans_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
