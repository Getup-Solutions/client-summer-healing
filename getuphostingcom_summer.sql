-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2023 at 11:03 PM
-- Server version: 10.5.22-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getuphostingcom_summer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincontactsettings`
--

CREATE TABLE `admincontactsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `tiktok_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `telegram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincontactsettings`
--

INSERT INTO `admincontactsettings` (`id`, `contact_number`, `contact_email`, `contact_address`, `facebook_url`, `tiktok_url`, `instagram_url`, `telegram_url`, `youtube_url`, `created_at`, `updated_at`) VALUES
(1, '0432293294', 'krishnadas@getupsolutions.com.au', '<p><a href=\"../../contact\" aria-invalid=\"true\">Brunswick<br>30-32 Sydney rd &lsquo;<br>Brunswick level 1<br>(Opposite 7-11 above Betta Health) </a> <br><a href=\"../../contact\" aria-invalid=\"true\">Open in google map</a></p>', 'https://www.facebook.com/SUMMERHEALING', 'https://www.tiktok.com/@summerhealing', 'https://www.instagram.com/summer_healing/', 'https://t.me/+I-F3dHgiOzBjYmY1', 'https://youtube.com', NULL, '2023-05-17 06:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `admincoursecats`
--

CREATE TABLE `admincoursecats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincoursecats`
--

INSERT INTO `admincoursecats` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', '2023-01-09 00:39:30', '2023-01-09 00:39:30'),
(2, 'Category 2', '2023-01-09 00:39:37', '2023-01-09 00:39:37'),
(3, 'Category 3', '2023-01-09 00:39:43', '2023-01-09 00:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `admincourses`
--

CREATE TABLE `admincourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `excerpt` longtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `course_category` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` varchar(251) DEFAULT NULL,
  `coursetype` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `embed_url` longtext DEFAULT NULL,
  `trainers` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincourses`
--

INSERT INTO `admincourses` (`id`, `title`, `slug`, `description`, `excerpt`, `featured_image`, `course_category`, `subscription`, `scheduledate`, `scheduletime`, `coursetype`, `level`, `status`, `embed_url`, `trainers`, `price`, `created_at`, `updated_at`) VALUES
(25, 'A Night With Tommy And Friends', 'a-night-with-tommy-and-friends', NULL, NULL, '1688367657.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 09:54:53', '2023-07-03 12:00:58'),
(26, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', '<p>In an aerial yoga class, you perform the same poses you do on a yoga mat, except you use a silk hammock that\'s suspended from the ceiling as a prop to support you through the various flows. The purpose of the hammock is to help you improve flexibility and build strength, while allowing you to do more challenging poses</p>', NULL, '1688367685.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 09:56:22', '2023-07-03 12:01:27'),
(27, 'Beginners Workshop', 'beginners-workshop', NULL, NULL, '1688374067.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 09:57:00', '2023-07-03 13:47:51'),
(28, 'Chai Chat Chill', 'chai-chat-chill', '<p>Join us for $5 contribution coffee, cacao, chai or herbal teas Come chill and talk all things detox and health nice way to meet other like minded members</p>', NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 5, '2023-05-15 09:58:28', '2023-07-03 12:03:13'),
(29, 'Chakra Dhyana Meditation', 'chakra-dhyana-meditation', '<p>A meditative discipline, comprising a set of simple techniques that uses the mind, senses to create a communication between \"mind\" and \"body\".&nbsp;<br>Kundalini focuses on psycho-spiritual growth and the body\'s potential for maturation, giving special consideration to the role of the spine and the endocrine system in the understanding of yogic awakening.Kundalini Yoga concentrates on psychic energy centers (called \"chakras\") in the body in order to generate a spiritual power, which is known as kundalini energy.Kundalini is the potential form of life force, lying dormant in our bodies. It is conceptualized as a coiled-up serpent (literally, \'kundalini\' in Sanskrit is \'That what is coiled\'.) lying at the base of our spine, which can spring awake when activated by spiritual disciplines.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:03:53', '2023-05-16 11:09:21'),
(30, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', '<p>Fits 1-5 people</p>\r\n<p>&nbsp;For more times text 0432293294 your prefered booking</p>\r\n<p>The benefits of using an infrared sauna are similar to those experienced with a traditional sauna. These include:</p>\r\n<p>&nbsp;better sleep</p>\r\n<p>relaxation</p>\r\n<p>detoxification</p>\r\n<p>weight loss</p>\r\n<p>&nbsp;relief from sore muscles</p>\r\n<p>&nbsp;relief from joint pain such as arthritis</p>\r\n<p>clear and tighter skin</p>\r\n<p>improved circulation</p>\r\n<p>&nbsp;help for people with chronic fatigue syndrome</p>\r\n<p>People have been using saunas for centuries for all sorts of health conditions. While there are several studies and research on traditional saunas, there aren&rsquo;t as many studies that look specifically at infrared saunas:</p>', NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 60, '2023-05-15 10:06:45', '2023-07-03 13:49:03'),
(31, 'Detox Retreat', 'detox-retreat', NULL, NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:07:33', '2023-07-03 12:06:21'),
(32, 'Dynamic Strengthening Class', 'dynamic-strengthening-class', '<p>This class is a combination of weights and Calisthenics it is a form of strength training consisting of a variety of movements that exercise large muscle groups (gross motor movements), such as standing, grasping, pushing, etc. These exercises are often performed rhythmically and with minimal equipment, as bodyweight exercises. They are intended to increase strength, fitness, and flexibility, through movements such as pulling, pushing, bending, jumping, or swinging, using one\'s body weight for resistance in pull-up, push-up squat ecc.. Calisthenics can provide the benefits of muscular and aerobic conditioning, in addition to improving psychomotor skills such as balance, agility, and coordination.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:08:12', '2023-05-16 09:43:44'),
(33, 'Equity Study', 'equity-study', '<p>equity and the world of commerce</p>', NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 10, '2023-05-15 10:08:59', '2023-07-03 12:06:57'),
(34, 'Free Style Yoga', 'free-style-yoga', '<p>During this 1.5 hr session you will have the use of our beautiful space to do your own practice.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 20, '2023-05-15 10:09:39', '2023-05-16 10:03:31'),
(35, 'Funky Kirtan', 'funky-kirtan', NULL, NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:10:12', '2023-05-15 10:10:12'),
(36, 'Hatha Yoga', 'hatha-yoga', '<p>Hatha postures are generally held for longer periods, and the transitions between poses are a little slower. The more gentle nature of this class is great for beginners, but is also wonderful for intermediate and advanced students who feel like slowing it down and sinking deeper into their practice.</p>', NULL, '1688367950.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:11:14', '2023-07-03 12:05:52'),
(37, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', '<p>What is hot power yoga? Hot Power yoga combines aspects of two popular modern types of yoga classes &ndash; Hot yoga and Power yoga &ndash; but the term encompasses a wide range of class structures and yoga styles. Like Hot yoga, Hot Power yoga is practiced in a heated room to loosen muscles and encourage sweating.</p>', '<p>What is hot power yoga? Hot Power yoga combines aspects of two popular modern types of yoga classes &ndash; Hot yoga and Power yoga &ndash; but the term encompasses a wide range of class structures and yoga styles. Like Hot yoga, Hot Power yoga is practiced in a heated room to loosen muscles and encourage sweating.</p>', NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:13:19', '2023-07-03 13:48:29'),
(38, 'Hot Power Vinyasa', 'hot-power-vinyasa', '<p>Hot Power Vinyasa</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:14:00', '2023-05-16 08:48:26'),
(39, 'Hot Power yoga', 'hot-power-yoga', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>NEW!!! LIVESTREAM PLATFORM!!!</p>\r\n<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>\r\n<p>&nbsp;Power ...</p>\r\n<p>Power yoga incorporates the athleticism of Ashtanga, including lots of vinyasas (series of poses done in sequence) but gives each teacher the flexibility to teach any poses in any order, making every class different.</p>\r\n<p>Boosts Your Immune System. ...</p>\r\n<p>Helps You Bend So You Don\'t Break! ...</p>\r\n<p>Makes You Sleep Better. ...</p>\r\n<p>Reduces IBS &amp; Improves Other Digestive Disorders. ...</p>\r\n<p>Builds Muscle. ...</p>\r\n<p>Eliminates Toxins. ...&nbsp;</p>\r\n<p>Helps To Regulate Hormones. ...</p>\r\n<p>&nbsp;Increases Bone Strength.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 10, '2023-05-15 10:14:40', '2023-05-16 09:47:38'),
(40, 'Hot Strong Vinyasa', 'hot-strong-vinyasa', '<p>Vinyasa- a beautiful flowing class of breath, asana and self awareness All levels</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:15:41', '2023-05-16 08:19:05'),
(41, 'Hot Vinyasa', 'hot-vinyasa', '<p>You may hear the terms &ldquo;hot yoga&rdquo; and &ldquo;Bikram yoga&rdquo; used interchangeably, but they&rsquo;re not exactly the same thing.</p>\r\n<p>&nbsp;Bikram yoga, developed by a yogi named Bikram Choudhury, is done in a room heated to 105&deg;F (41&deg;C) with 40 percent humidity. It consists of 26 poses and two breathing exercises that are done in the same order in every class. Bikram yoga sessions typically last 90 minutes.</p>\r\n<p>Hot yoga, on the other hand, really just means that the room is heated above normal room temperature. The heat can be set to whatever the yoga instructor wants, though it&rsquo;s typically between 80 and 100&deg;F (27 and 34&deg;C).</p>\r\n<p>Hot yoga sessions can include any variety of poses, and the time of each class will vary from studio to studio. And unlike Bikram yoga, which is a quieter, serious practice, hot yoga often includes music and more interaction among the people in the class.</p>\r\n<p>Bikram yoga has lost followers in recent years due to assault allegations against its founder. Some studios may use the term &ldquo;hot yoga&rdquo; rather than &ldquo;Bikram yoga&rdquo; to describe their heated classes. So, it&rsquo;s a good idea to read class descriptions carefully before signing up.</p>\r\n<p>What are the benefits of hot yoga? Regardless of the room temperature, both hot yoga and Bikram yoga aim to provide relaxation of the mind and improve physical fitness.</p>\r\n<p>A heated environment can make the practice of yoga more challenging, but some of the benefits may be worth it, especially if you&rsquo;re looking to make progress in one of the areas outlined below.</p>\r\n<p>If done correctly and safely, hot yoga can provide the following benefits:</p>\r\n<ol>\r\n<li>Improves flexibility&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; You may already know that stretching after you warm up your muscles is safer than stretching cold muscles.<br><br>So, it follows that an environment like a hot yoga studio can make yoga poses easier and more effective. The heat allows you to stretch a little further and achieve a greater range of motion. <br><br>A 2013 studyTrusted Source of Bikram yoga found that after 8 weeks, yoga participants had greater flexibility in their low back, shoulders, and hamstrings than the control group.&nbsp;</li>\r\n<li>Burns more calories<br>&nbsp;A 160-pound person can burn around 183 calories an hour with traditional yoga. Turning up the heat can help you burn even more calories. <br><br>According to researchers at Colorado State University, the calorie burn can be as high as 460 for men and 330 for women during a 90-minute Bikram yoga session. <br><br>Hot yoga, even if it&rsquo;s not quite as intense as a Bikram session, will burn more calories than a traditional yoga workout.</li>\r\n<li>Builds bone density<br>Supporting your weight during a yoga pose can help build bone density. This is especially important for older adults and premenopausal women, as bone density declines as you age. <br><br>A 2014 study of women who participated in Bikram yoga over a 5-year period found that premenopausal women had increased bone density in their neck, hips, and lower back. This lead the authors of the study to believe that Bikram yoga may be an effective option for reducing the risk of osteoporosis in women.</li>\r\n<li>&nbsp;Reduces stress <br>Many people turn to yoga as a natural way to deal with stress. <br><br>A 2018 studyTrusted Source of stressed, physically inactive adults found that a 16-week program of hot yoga significantly reduced the participants&rsquo; stress levels.<br><br>At the same time, it improved their health-related quality of life, as well as their self-efficacy &mdash; the belief that you have control over your behavior and social environment.</li>\r\n<li>&nbsp;Eases depression <br>Yoga is well known as a technique to help you relax and improve your mood. According to the American Psychology Association, it may also be a helpful therapy for reducing the symptoms of depression. <br><br>Additionally, a 2017 reviewTrusted Source of 23 different studies that focused on yoga as a treatment for depression concluded that yoga is an effective way to reduce depressive symptoms.</li>\r\n<li>&nbsp;Provides a cardiovascular boost <br>Striking different yoga poses in high heat can give your heart, lungs, and muscles a more challenging workout than doing the same poses in a lower temperature. <br><br>According to a 2014 study, just one session of hot yoga is enough to get your heart pumping at the same rate as a brisk walk (3.5 miles per hour). Hot yoga also revs up your respiration and metabolism.</li>\r\n<li>&nbsp;Reduces blood glucose levels <br>While any type of exercise can help burn energy and reduce circulating levels of glucose (sugar) in your bloodstream, hot yoga may be an especially helpful tool for people at higher risk for type 2 diabetes.<br><br>A 2013 studyTrusted Source found that a short-term Bikram yoga program improved glucose tolerance in older adults with obesity, but it had less of an effect on young, lean adults.</li>\r\n<li>&nbsp;Nourishes the skin <br>Sweating, and a lot of if, is one of the main objectives of hot yoga.<br><br>One of the benefits of sweating in a warm environment is that it can improve circulation, bringing oxygen- and nutrient-rich blood to skin cells. This, in turn, may help to nourish your skin from the inside.<br><br>&nbsp;Safety tips<br>If you&rsquo;re in good health, hot yoga is generally safe. But, as with most types of exercise, there are some safety precautions to keep in mind.<br><br>Dehydration is a major concern with hot yoga. Drinking water before, during, and after a hot yoga class is essential. A low-calorie sports drink may also help restore electrolytes lost during your hot yoga workout.<br><br>Some pre-existing health conditions may make you more prone to passing out in a hot room. This includes heart disease, diabetes, arterial abnormalities, anorexia nervosa, and a history of fainting. If you have low blood pressure or low blood sugar, you may be prone to dizziness or lightheadedness with hot yoga. Check with your doctor to make sure hot yoga is safe for you. Pregnant women should consult their doctor before trying hot yoga. If you&rsquo;ve had heat intolerance problems in the past, you may want to stick with yoga that&rsquo;s done at a normal temperature. Stop right away if you feel dizzy, lightheaded, or nauseous. Leave the room and rest in a cooler environment.</li>\r\n</ol>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:21:45', '2023-05-16 07:10:47'),
(42, 'Infra Red Sauna', 'infra-red-sauna', '<p>Fits 1-2 people</p>\r\n<p>Second sauna fits 5</p>\r\n<p>For more times text 0432293294 your prefered booking</p>\r\n<p>The benefits of using an infrared sauna are similar to those experienced with a traditional sauna. These include:</p>\r\n<p>better sleep</p>\r\n<p>relaxation</p>\r\n<p>detoxification</p>\r\n<p>&nbsp;weight loss</p>\r\n<p>relief from sore&nbsp;muscles</p>\r\n<p>&nbsp;relief from joint pain such as arthritis</p>\r\n<p>clear and tighter skin</p>\r\n<p>&nbsp;improved circulation</p>\r\n<p>&nbsp;help for people with chronic fatigue syndrome</p>\r\n<p>&nbsp;People have been using saunas for centuries for all sorts of health conditions. While there are several studies and research on traditional saunas, there aren&rsquo;t as many studies that look specifically at infrared saunas:</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 40, '2023-05-15 10:23:06', '2023-05-16 06:51:10'),
(43, 'Infra Red Sauna, Ice Bath and Rebirthing Breathwork Immersion', 'infra-red-sauna-ice-bath-and-rebirthing-breathwork-immersion', '<p>This is a transformative immersion a day of Breathwork and detox practices, get ready to process your deep triggers that are holding you back from living limitlessly</p>', '<p>This is a transformative immersion a day of Breathwork and detox practices, get ready to process your deep triggers that are holding you back from living limitlessly</p>', 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 150, '2023-05-15 10:28:21', '2023-06-27 10:50:41'),
(44, 'Kirtan and Sound Healing', 'kirtan-and-sound-healing', NULL, NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:34:52', '2023-05-15 10:34:52'),
(45, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', '<p>This awakens the kundalini {spiritual energy} it burns all bad muscle memory bad, bio memory this is a workout as well but a spiritual and physical detox completely</p>\r\n<p>This practice destroys bad habits and reactions and slows and potentially stops the ageing process.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:41:55', '2023-05-16 08:40:15'),
(46, 'Meditation audio guided', 'meditation-audio-guided', '<p>Meditation is considered a type of mind-body complementary medicine. Meditation can produce a deep state of relaxation and a tranquil mind. During meditation, you focus your attention and eliminate the stream of jumbled thoughts that may be crowding your mind and causing stress.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', 'iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:44:34', '2023-05-16 08:42:00'),
(47, 'New Years Eve Party', 'new-years-eve-party', NULL, NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:46:55', '2023-05-15 10:46:55'),
(48, 'OSHO Active Meditations', 'osho-active-meditations', '<p>If you want to live a more fulfilled life, first you will want to know your potential, who you really are. Meditation is the route to that knowing. It is the methodology of the science of awareness.<br>&nbsp;<br>Many of the traditional meditative techniques require one to sit still in order to be silent. Firstly, it is an inner stillness that is valuable, and the outer stillness is only in support of that inner stillness. And secondly, for most of us, the accumulated stress in our bodymind makes inner or outer stillness very difficult.</p>\r\n<p>That\'s why OSHO Active Meditations have been scientifically designed by Osho, over a long period of experimentation. They enable us to consciously express, experience, and release repressed feelings and emotions and to bring the body back to a relaxed harmony &ndash; and then the journey inwards can begin.</p>\r\n<p>\"By meditation I mean silence, awareness, witnessing. You can meditate any time of the day, you can meditate working, walking, doing things. Meditation is not something separate from life; it should not be separate, otherwise it remains a little artificial. Meditation should be spread all over life. You should walk in meditation, you should sit in meditation; that means silently, fully aware. Slowly, slowly it becomes your very flavor&hellip;.\" Osho</p>\r\n<p>This meditation is a fast, intense and thorough way to break old, ingrained patterns in the bodymind that keep one imprisoned in the past, and to experience the freedom, the witnessing, silence and peace that are hidden behind those prison walls.</p>\r\n<p>The meditation is meant to be done in the early morning, when &ldquo;the whole of nature becomes alive, the night has gone, the sun is coming up and everything becomes conscious and alert.&rdquo;&nbsp;</p>\r\n<p>You can do this meditation alone, but to start with it can be helpful to do it with other people. It is an individual experience, so remain oblivious of others around you. Wear loose, comfortable clothing.</p>\r\n<p>&nbsp;This is a meditation in which you have to be continuously alert, conscious, aware, whatsoever you do. Remain a witness. And when &ndash; in the fourth stage &ndash; you have become completely inactive, frozen, then this alertness will come to its peak.</p>\r\n<p>&nbsp;First Stage: CHAOTIC BREATHING (10 minutes) Breathing chaotically through the nose, let breathing be intense, deep, fast, without rhythm, with no pattern &ndash; and concentrating always on the exhalation. The body will take care of the inhalation. The breath should move deeply into the lungs. Do this as fast and as hard as you possibly can until you literally become the breathing. Use your natural body movements to help you to build up your energy. Feel it building up, but don&rsquo;t let go during the first stage.</p>\r\n<p>&nbsp;Second Stage: CATHARSIS (10 minutes) EXPLODE! &hellip; Let go of everything that needs to be thrown out. Follow your body. Give your body freedom to express whatever is there. Go totally mad. Scream, shout, cry, jump, kick, shake, dance, sing, laugh; throw yourself around. Hold nothing back; keep your whole body moving. A little acting often helps to get you started. Never allow your mind to interfere with what is happening. Consciously go mad. Be total.</p>\r\n<p>Third Stage: HOO BREATHING/JUMPING (10 minutes) With arms raised high above your head, jump up and down shouting the mantra, &ldquo;Hoo! Hoo! Hoo!&rdquo; as deeply as possible. Each time you land, on the flats of your feet, let the sound hammer deep into the sex center. Give all you have; exhaust yourself completely.</p>\r\n<p>&nbsp;Fourth Stage: STOP (15 minutes) STOP! Freeze wherever you are, in whatever position you find yourself. Don&rsquo;t arrange the body in any way. A cough, a movement, anything, will dissipate the energy flow and the effort will be lost. Be a witness to everything that is happening to you.</p>\r\n<p>Fifth Stage: CELEBRATION (15 minutes) Celebrate! With music and dance express whatsoever is there. Carry your aliveness with you throughout the day.</p>\r\n<p>Osho explains about this meditation:</p>\r\n<p>&ldquo;Remain a witness. Don&rsquo;t get lost. It is easy to get lost. While you are breathing you can forget: you can become one with the breathing so much that you can forget the witness. But then you miss the point. Breathe as fast, as deep as possible, bring your total energy to it, but still remain a witness. Observe what is happening as if you are just a spectator, as if the whole thing is happening to somebody else, as if the whole thing is happening in the body and the consciousness is just centered and looking. This witnessing has to be carried in all the three steps. And when everything stops, and in the fourth step you have become completely inactive, frozen, then this alertness will come to its peak.&rdquo;</p>\r\n<p>&ldquo;It takes time &ndash; at least three weeks are needed to get the feel of it, and three months to move into a different world. But that too is not fixed. It differs from individual to individual. If your intensity is very great, it can even happen in three days.&rdquo;</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:49:12', '2023-05-16 07:31:55'),
(49, 'Prana Vinyasa', 'prana-vinyasa', '<p>Prana Flow Yoga is a liberating, evolutionary and rhythmic flow class that encompasses chanting, and breathing control. This type of yoga is set to music, Prana Flow Yoga is an energetic flowing yoga. The aim is a direct experience of prana, or life-energy.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 10:50:17', '2023-05-16 08:49:44'),
(50, 'Rebirthing Breathwork', 'rebirthing-breathwork', '<p>Rebirthing Breathwork (aka Conscious Connected Breathing) is a technique in which we breathe energy with air. It is a relaxed breath where the inhale merges with the exhale and the exhale is a gravity release without pausing or forcing the breath for an hour cycle.</p>\r\n<p>&nbsp;Supporters of rebirthing claim that by participating in a &ldquo;rebirth&rdquo; as a child or adult, you can resolve negative experiences from birth and infancy that may be preventing you from forming healthy relationships. Some even claim to have memories of their birth during rebirthing</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:54:12', '2023-05-16 08:43:51'),
(51, 'Rebirthing Breathwork Cave Room', 'rebirthing-breathwork-cave-room', '<p>This is an excellent opportunity for the teacher to be able to give you more guidance and individual direction due to the class size maxed at 10.<br><br>&nbsp;Rebirthing Breathwork (aka Conscious Connected Breathing) is a technique in which we breathe energy with air. It is a relaxed breath where the inhale merges with the exhale and the exhale is a gravity release without pausing or forcing the breath for an hour cycle. Supporters of rebirthing claim that by participating in a &ldquo;rebirth&rdquo; as a child or adult, you can resolve negative experiences from birth and infancy that may be preventing you from forming healthy relationships. Some even claim to have memories of their birth during rebirthing.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 10:56:39', '2023-05-16 07:16:51'),
(52, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-with-didgeridoo', NULL, NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 10:59:26', '2023-05-15 10:59:26'),
(53, 'Reiki and Yin Yoga', 'reiki-and-yin-yoga', '<p>Yin Yoga</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 11:00:30', '2023-05-16 09:23:13'),
(54, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', '<p>Choose from Remedial Massage yin massage Chakra Light Bed Healing Rebirthing Breathwork One on one Yoga Session Kahuna Massage.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 100, '2023-05-15 11:03:37', '2023-05-16 08:22:25'),
(55, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', '<p>Relax back on our Turkish couches with a cup of herbal tea and enjoy one of our handpicked satsangs from our favourite spiritual teachers on this planet.</p>\r\n<p>Gyan, also known as gyan marga, is the way of gaining true knowledge of the self. It is the art of union with the Divine, through pursuit of spiritual knowledge. A gyan yogi explores some very basic questions of life such as \'who am I\' and \'how am I related to the world as a whole\'</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 5, '2023-05-15 11:04:42', '2023-05-16 10:06:09'),
(56, 'Slow Flow Seva', 'slow-flow-seva', '<p>This class is taught by our wonderful training or newly trained teacher trainers.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 10, '2023-05-15 11:05:25', '2023-05-16 09:49:43'),
(57, 'Soul Dance', 'soul-dance', NULL, NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 11:14:35', '2023-05-15 11:14:35'),
(58, 'Sound Mediation', 'sound-mediation', '<p>People claim that sound baths can trigger a phenomenon called &ldquo;sound healing.&rdquo; Sound healing has been a home remedy favored by many cultures for thousands of years.</p>\r\n<p>&nbsp;Typically, a sound bath will involve lying in a reclining position after taking part in yoga or meditation exercises.</p>\r\n<p>Next, a provider trained in sound bath musical techniques will use one or several instruments to create soothing, overlapping vibrations.</p>\r\n<p>These vibrations theoreticallyTrusted Source lead you deeper into a state of contemplation or relaxation, shutting off your body&rsquo;s fight-or-flight reflex.&nbsp;</p>\r\n<p>At the end of a session, your provider will guide you back to a feeling of awareness before concluding the sound bath and wishing you well on your journey.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 11:16:19', '2023-05-16 08:46:40'),
(59, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', '<div class=\"content-group\">\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Bella is an intuitive and perceptive Tarot card reader. She is inspired by the chakra system, numerology, and, most importantly, the querent (the person seeking advice from the Tarot a.k.a. their Higher Self). Bella offers nurturing one-on-one and group readings (think of it like a potential forecast for the week ahead). </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Come on down and get a reading! Available every second Saturday of the month, from 11am to 12pm at Summer Healing Yoga Brunswick </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Please message Bella Sera on Facebook to enquire or book, or text her on 0413 481 762. Given this is an energtic exchange, donation of money, food, crafts or gifts are welcome &ndash; whatever your heart is called to give!&nbsp;</span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Blessings x</span></p>\r\n</div>\r\n<div class=\"content-group-extra\">\r\n<p><span class=\"ng-binding\">Fri, May 19th</span></p>\r\n</div>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 11:33:55', '2023-05-16 09:21:14'),
(60, 'Vinyasa', 'vinyasa', '<p>Vinyasa</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:34:48', '2023-05-16 08:32:11'),
(61, 'Vinyasa flow', 'vinyasa-flow', '<p>Image result for infrared sauna benefits The benefits of infrared saunas include helping relieve inflammation, stiffness and soreness by increasing blood circulation and allowing the deep, penetrating infrared heat to relax muscles and carry off metabolic waste products, while delivering oxygen-rich blood to the muscles for a faster recovery.</p>\r\n<p>The variable nature of Vinyasa Yoga helps to develop a more balanced body as well as prevent repetitive motion injuries that can happen if you are always doing the same thing every day.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:37:40', '2023-05-16 08:26:02'),
(62, 'Yin Yoga', 'yin-yoga', '<p>Deep stretching that restores the whole nervous system.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-05-15 11:38:10', '2023-05-16 07:25:33'),
(63, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', '<p>Benefits of a regular Yin yoga practice:</p>\r\n<p>- Calms and balances the mind and body&nbsp;<br>- Reduces stress and anxiety<br>&nbsp;-Increases circulation&nbsp;<br>- Improves flexibility<br>- Releases fascia and improves joint mobility<br>- Balances the internal organs and improves the flow of chi or prana&nbsp;</p>\r\n<p>While &ldquo;yang&rdquo; yoga focuses on your muscles, yin yoga targets your deep connective tissues, like your fascia, ligaments, joints, and bones. It&rsquo;s slower and more meditative, giving you space to turn inward and tune into both your mind and the physical sensations of your body. Because you&rsquo;re holding poses for a longer period of time than you would in other traditional types of yoga, yin yoga helps you stretch and lengthen those rarely-used tissues while also teaching you how to breathe through discomfort and sit with your thoughts.</p>\r\n<p>The practice of yin yoga is based on ancient Chinese philosophies and Taoist principles which believe there are pathways of Qi (energy) that run through our bodies. By stretching and deepening into poses, we&rsquo;re opening up any blockages and releasing that energy to flow freely.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:38:55', '2023-05-16 08:30:38'),
(64, 'Yin Yoga Seva class', 'yin-yoga-seva-class', '<p>Benefits of a regular Yin yoga practice:</p>\r\n<p>- Calms and balances the mind and body&nbsp;<br>-Reduces stress and anxiety <br>- Increases circulation <br>- Improves flexibility <br>- Releases fascia and improves joint mobility <br>- Balances the internal organs and improves the flow of chi or prana&nbsp;</p>\r\n<p>While &ldquo;yang&rdquo; yoga focuses on your muscles, yin yoga targets your deep connective tissues, like your fascia, ligaments, joints, and bones. It&rsquo;s slower and more meditative, giving you space to turn inward and tune into both your mind and the physical sensations of your body. Because you&rsquo;re holding poses for a longer period of time than you would in other traditional types of yoga, yin yoga helps you stretch and lengthen those rarely-used tissues while also teaching you how to breathe through discomfort and sit with your thoughts.</p>\r\n<p>&nbsp;The practice of yin yoga is based on ancient Chinese philosophies and Taoist principles which believe there are pathways of Qi (energy) that run through our bodies. By stretching and deepening into poses, we&rsquo;re opening up any blockages and releasing that energy to flow freely.</p>', NULL, 'common_banner.jpg', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 10, '2023-05-15 11:39:45', '2023-05-16 09:18:21'),
(65, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', '<div class=\"content-group\">\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">What is Yin Yoga good for? Image result for yin yoga Yin yoga offers a wealth of benefits that may help you to alleviate pain and tension, relieve stress and anxiety, and improve your overall well-being. The practice of holding a pose for an extended period teaches you to sit with and observe uncomfortable emotions, thoughts, or physical sensations as they arise. Satsang is a gathering of people gathering to seek truth</span></p>\r\n</div>\r\n<div class=\"content-group-extra\">\r\n<p><span class=\"ng-binding\">Mon, May 22nd</span></p>\r\n</div>', NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:41:19', '2023-07-03 11:33:41'),
(66, 'Yin And Mediation', 'yin-and-mediation', '<p>Yin and Meditation</p>', NULL, '1688365679.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:43:25', '2023-07-03 11:28:01'),
(67, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', '<div class=\"content-group\">\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Yoga nidra is an ancient but little-known yogic practice that&rsquo;s becoming increasingly popular as both a form of meditation and a mind-body therapy. It is a systematic form of guided relaxation that typically is done for 35 to 40 minutes at a time. </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">savasana corpse pose Practitioners say that it often brings immediate physical benefits, such as reduced stress and better sleep, and that it has the potential to heal psychological wounds. As a meditation practice, it can engender a profound sense of joy and well-being. &ldquo;</span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">In yoga nidra, we restore our body, senses, and mind to their natural function and awaken a seventh sense that allows us to feel no separation, that only sees wholeness, tranquility, and well-being,&rdquo; says Richard Miller, a San Francisco Bay Area yoga teacher and clinical psychologist who is at the forefront of the movement to teach yoga nidra and to bring it to a wider audience.</span></p>\r\n</div>\r\n<div class=\"content-group-extra\">\r\n<p>&nbsp;</p>\r\n</div>', NULL, NULL, '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-15 11:45:41', '2023-07-03 11:25:52'),
(68, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', '<p>What happens in yoga nidra? Image result for yoga nidra During Yoga Nidra, you will enter a calming state for the mind and body through guided meditation. The practice creates physical and mental activities that change brain waves to release emotional tension, slow down the nervous system, and allow muscles to relax.</p>', NULL, '1688365918.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-15 11:50:51', '2023-07-03 11:32:29'),
(69, 'Soup Night $7 Donation', 'soup-night-7-donation', '<p>Join us for soup feel free to make the soup one week or bring some bread and salad or just kick back and enjoy the offering</p>\r\n<p>&nbsp;Please book in so we know how many to cook for.</p>', NULL, '1688365262.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 7, '2023-05-16 06:33:14', '2023-07-03 11:21:04'),
(70, 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'kundalini-yoga-pranayama-yin-live-stream', '<p>http://summerhealing.org/livestream NEW!!!</p>\r\n<p>LIVESTREAM PLATFORM!!!</p>\r\n<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>', NULL, '1688364987.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-16 08:37:47', '2023-07-03 11:16:38');
INSERT INTO `admincourses` (`id`, `title`, `slug`, `description`, `excerpt`, `featured_image`, `course_category`, `subscription`, `scheduledate`, `scheduletime`, `coursetype`, `level`, `status`, `embed_url`, `trainers`, `price`, `created_at`, `updated_at`) VALUES
(71, 'Prana Vinyasa - Live Stream', 'prana-vinyasa-live-stream', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>&nbsp;NEW!!! LIVESTREAM PLATFORM!!!</p>\r\n<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today. Prana Flow Yoga is a liberating, evolutionary and rhythmic flow class that encompasses chanting, and breathing control. This type of yoga is set to music, relaxing the body and mind. Created by Shiva Rea, Prana Flow Yoga is an energetic flowing yoga. The aim is a direct experience of prana, or life-energy.</p>', NULL, '1688377288.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-16 09:13:58', '2023-07-03 14:41:34'),
(72, 'Hot Strong Yoga', 'hot-strong-yoga', '<div class=\"content-group\">\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">As the name suggests, power yoga is focused on building strength and endurance. It is also an excellent form of yoga for burning calories.&nbsp;</span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">Although power yoga isn&rsquo;t an official type of yoga, the term is sometimes used interchangeably with Vinyasa yoga. It&rsquo;s probably more accurate to say that power yoga is a form of Vinyasa, which has its roots in Ashtanga yoga, an established practice that began in the early 20th century. </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">With power yoga, the emphasis is on the flow from one pose to the next, rather than approaching each pose separately. The poses aren&rsquo;t disconnected from each other, unlike some other forms of yoga. </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">No matter what you call it, power yoga is a fast-paced and intense activity. You move from one posture to another rapidly, linking your breathing to the different motions of your body. </span></p>\r\n<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">A power yoga class may seem more like an aerobics class than a relaxed, mindful yoga experience. Though it requires mindfulness and focus on your breathing, power yoga is more dynamic than meditative.</span></p>\r\n</div>', '<p><span class=\"white-pre-line ng-binding\" aria-hidden=\"false\">As the name suggests, power yoga is focused on building strength and endurance. It is also an excellent form of yoga for burning calories.</span></p>', '1688364420.png', '1', '2', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 25, '2023-05-16 09:31:53', '2023-07-03 11:07:25'),
(73, 'Vinyasa - Livestream', 'vinyasa-livestream', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>NEW!!! LIVESTREAM PLATFORM!!!</p>\r\n<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>', NULL, '1688365417.png', '1', '2', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 10, '2023-05-16 10:55:53', '2023-07-03 11:23:42'),
(74, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>&nbsp;NEW!!! LIVESTREAM PLATFORM!!! Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>NEW!!! LIVESTREAM PLATFORM!!! Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>', '1688364305.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-17 10:59:56', '2023-07-03 11:05:07'),
(75, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', '<p><a href=\"http://summerhealing.org/livestream\">http://summerhealing.org/livestream</a></p>\r\n<p>&nbsp;NEW!!! LIVESTREAM PLATFORM!!!</p>\r\n<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today. What is hot power yoga? Hot Power yoga combines aspects of two popular modern types of yoga classes &ndash; Hot yoga and Power yoga &ndash; but the term encompasses a wide range of class structures and yoga styles. Like Hot yoga, Hot Power yoga is practiced in a heated room to loosen muscles and encourage sweating.</p>', '<p>Welcome to our new Live Stream platform for just $10 per week you can access over 30 Live Stream classes per week and Video on Demand, simply click on the link to join today.</p>', '1688364268.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 0, '2023-05-18 07:23:15', '2023-07-03 11:04:30'),
(77, 'Ascension Meditation', 'ascension-meditation', '<p>Meditation is considered a type of mind-body complementary medicine. Meditation can produce a deep state of relaxation and a tranquil mind. During meditation, you focus your attention and eliminate the stream of jumbled thoughts that may be crowding your mind and causing stress.</p>', NULL, '1688363405.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 30, '2023-06-06 08:24:05', '2023-07-03 10:50:28'),
(78, 'Kundalini Tantra Yoga', 'kundalini-tantra-yoga', '<p>This awakens the kundalini {spiritual energy} it burns all bad muscle memory bad, bio memory this is a workout as well but a spiritual and physical detox completely this practice destroys bad habits and reactions and slows and potentially stops the ageing process.</p>', NULL, '1688360551.png', '1', '6', NULL, NULL, 'course', NULL, 'Published', '<iframe src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '3,25,26,30', 30, '2023-06-06 09:15:44', '2023-08-23 13:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `admincourse_admincoursecat`
--

CREATE TABLE `admincourse_admincoursecat` (
  `admincourse_id` bigint(20) UNSIGNED NOT NULL,
  `admincoursecat_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincourse_admincoursecat`
--

INSERT INTO `admincourse_admincoursecat` (`admincourse_id`, `admincoursecat_id`) VALUES
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(77, 1),
(78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admincourse_adminschedule`
--

CREATE TABLE `admincourse_adminschedule` (
  `admincourse_id` bigint(20) UNSIGNED NOT NULL,
  `adminschedule_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincourse_adminschedule`
--

INSERT INTO `admincourse_adminschedule` (`admincourse_id`, `adminschedule_id`) VALUES
(37, 81),
(74, 82),
(43, 84),
(45, 85),
(30, 86),
(54, 87),
(30, 88),
(54, 89),
(32, 90),
(39, 91),
(39, 92),
(30, 94),
(56, 95),
(54, 93),
(54, 96),
(26, 97),
(30, 98),
(28, 99),
(42, 101),
(26, 100),
(30, 102),
(50, 103),
(69, 104),
(42, 105),
(65, 106),
(72, 83),
(42, 111),
(61, 112),
(30, 113),
(37, 114),
(75, 115),
(33, 116),
(34, 117),
(54, 118),
(55, 122),
(68, 123),
(65, 124),
(30, 125),
(41, 126),
(42, 127),
(60, 128),
(67, 129),
(67, 130),
(30, 131),
(60, 132),
(73, 133),
(41, 134),
(73, 135),
(30, 136),
(66, 137),
(55, 138),
(51, 139),
(41, 140),
(42, 141),
(30, 142),
(62, 143),
(30, 144),
(48, 145),
(36, 146),
(42, 147),
(40, 148),
(42, 149),
(75, 150),
(37, 151),
(54, 152),
(61, 153),
(30, 154),
(63, 155),
(62, 156),
(60, 157),
(42, 158),
(70, 159),
(45, 160),
(42, 161),
(54, 162),
(46, 163),
(50, 164),
(42, 165),
(36, 166),
(58, 167),
(42, 168),
(38, 169),
(42, 170),
(49, 171),
(71, 172),
(64, 173),
(30, 174),
(42, 175),
(30, 176),
(42, 177),
(62, 178),
(59, 179),
(42, 180),
(53, 181),
(30, 182),
(37, 183),
(74, 184),
(72, 185),
(45, 186),
(30, 187),
(36, 188),
(54, 189),
(30, 190),
(54, 191),
(32, 192),
(54, 193),
(30, 194),
(39, 195),
(39, 196),
(56, 197),
(54, 198),
(26, 199),
(30, 200),
(28, 201),
(42, 202),
(26, 203),
(42, 204),
(30, 205),
(52, 206),
(29, 207),
(69, 208),
(42, 209),
(63, 210),
(42, 211),
(61, 212),
(30, 213),
(75, 214),
(37, 215),
(34, 216),
(33, 217),
(54, 218),
(55, 219),
(68, 220),
(41, 221),
(60, 222),
(65, 223),
(42, 224),
(30, 225),
(67, 226),
(67, 227),
(30, 228),
(73, 229),
(60, 230),
(41, 231),
(73, 232),
(30, 233),
(66, 234),
(55, 235),
(42, 236),
(41, 237),
(51, 238),
(30, 239),
(62, 240),
(30, 241),
(48, 242),
(36, 243),
(42, 244),
(60, 245),
(42, 246),
(37, 247),
(75, 248),
(54, 249),
(61, 250),
(30, 251),
(63, 252),
(62, 253),
(40, 254),
(42, 255),
(70, 256),
(45, 257),
(42, 258),
(54, 259),
(46, 260),
(42, 261),
(50, 262),
(50, 263),
(36, 264),
(58, 265),
(42, 266),
(38, 267),
(42, 268),
(49, 269),
(71, 270),
(64, 271),
(30, 272),
(42, 273),
(30, 274),
(42, 275),
(62, 276),
(59, 277),
(59, 278),
(42, 279),
(53, 280),
(30, 281),
(37, 282),
(72, 283),
(74, 284),
(59, 285),
(59, 286),
(45, 287),
(30, 288),
(36, 289),
(54, 290),
(30, 291),
(54, 292),
(32, 293),
(39, 294),
(39, 295),
(54, 296),
(30, 297),
(61, 298),
(54, 299),
(26, 300),
(30, 301),
(42, 302),
(28, 303),
(26, 304),
(42, 305),
(30, 306),
(29, 308),
(69, 309),
(42, 310),
(63, 311),
(52, 307),
(42, 312),
(61, 313),
(30, 314),
(75, 315),
(37, 316),
(34, 317),
(33, 318),
(54, 319),
(55, 320),
(68, 321),
(41, 322),
(60, 323),
(65, 324),
(42, 325),
(30, 326),
(67, 327),
(67, 328),
(30, 329),
(60, 330),
(73, 331),
(41, 332),
(73, 333),
(30, 334),
(66, 335),
(55, 336),
(42, 337),
(41, 338),
(51, 339),
(30, 340),
(62, 341),
(30, 342),
(48, 343),
(36, 344),
(42, 345),
(60, 346),
(42, 347),
(75, 348),
(37, 349),
(54, 350),
(61, 371),
(30, 372),
(63, 373),
(62, 374),
(40, 375),
(40, 376),
(42, 377),
(70, 378),
(45, 379),
(42, 380),
(54, 381),
(46, 382),
(52, 383),
(42, 384),
(36, 385),
(58, 386),
(42, 387),
(38, 388),
(42, 389),
(49, 390),
(71, 391),
(64, 392),
(30, 393),
(42, 394),
(30, 395),
(42, 396),
(62, 397),
(59, 398),
(59, 399),
(42, 400),
(62, 401),
(30, 402),
(37, 403),
(72, 404),
(74, 405),
(59, 406),
(59, 407),
(45, 408),
(30, 409),
(36, 410),
(54, 411),
(30, 412),
(54, 413),
(32, 414),
(39, 415),
(39, 416),
(54, 417),
(30, 418),
(56, 419),
(54, 420),
(26, 421),
(30, 422),
(26, 423),
(42, 424),
(28, 425),
(42, 426),
(30, 427),
(29, 429),
(69, 430),
(42, 431),
(63, 432),
(52, 428),
(42, 433),
(61, 434),
(30, 435),
(37, 436),
(75, 437),
(34, 438),
(33, 439),
(54, 440),
(55, 441),
(68, 442),
(65, 443),
(60, 444),
(41, 445),
(42, 446),
(30, 447),
(67, 448),
(67, 449),
(30, 450),
(60, 451),
(73, 452),
(41, 453),
(73, 454),
(30, 455),
(66, 456),
(55, 457),
(41, 458),
(42, 459),
(52, 460),
(30, 461),
(62, 462),
(30, 463),
(48, 473),
(36, 474),
(42, 476),
(60, 477),
(42, 478),
(75, 479),
(37, 480),
(54, 481),
(61, 482),
(30, 483),
(77, 484),
(63, 485),
(62, 486),
(40, 487),
(42, 488),
(70, 489),
(42, 490),
(78, 491),
(54, 492),
(42, 494),
(36, 495),
(58, 496),
(42, 497),
(50, 493),
(38, 498),
(42, 499),
(49, 500),
(71, 501),
(64, 502),
(30, 503),
(42, 504),
(30, 505),
(42, 506),
(62, 507),
(59, 508),
(42, 509),
(62, 510),
(30, 511),
(37, 512),
(74, 513),
(72, 514),
(78, 515),
(30, 516),
(36, 517),
(54, 518),
(30, 519),
(54, 520),
(32, 521),
(30, 522),
(39, 523),
(39, 524),
(54, 525),
(56, 526),
(54, 527),
(26, 528),
(30, 529),
(26, 530),
(28, 531),
(42, 532),
(42, 533),
(30, 534),
(50, 535),
(29, 536),
(69, 537),
(42, 538),
(63, 539),
(42, 540),
(61, 541),
(30, 542),
(75, 543),
(37, 544),
(34, 545),
(33, 546),
(54, 547),
(55, 548),
(68, 549),
(41, 550),
(60, 551),
(65, 552),
(42, 553),
(30, 554),
(67, 555),
(67, 556),
(30, 557),
(60, 558),
(73, 559),
(41, 560),
(73, 561),
(30, 562),
(66, 563),
(55, 564),
(41, 565),
(42, 566),
(51, 567),
(30, 568),
(62, 569),
(30, 570),
(48, 571),
(54, 572),
(60, 573),
(37, 574),
(74, 575),
(72, 576),
(78, 577);

-- --------------------------------------------------------

--
-- Table structure for table `admincourse_adminsubscription`
--

CREATE TABLE `admincourse_adminsubscription` (
  `admincourse_id` bigint(20) UNSIGNED NOT NULL,
  `adminsubscription_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincourse_adminsubscription`
--

INSERT INTO `admincourse_adminsubscription` (`admincourse_id`, `adminsubscription_id`) VALUES
(25, 6),
(26, 6),
(27, 6),
(28, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6),
(33, 6),
(34, 6),
(35, 6),
(36, 6),
(37, 6),
(38, 6),
(39, 6),
(40, 6),
(41, 6),
(42, 6),
(43, 6),
(44, 6),
(45, 6),
(46, 6),
(47, 6),
(48, 6),
(49, 6),
(50, 6),
(51, 6),
(52, 6),
(53, 6),
(54, 6),
(55, 6),
(56, 6),
(57, 6),
(58, 6),
(59, 6),
(60, 6),
(61, 6),
(62, 6),
(63, 6),
(64, 6),
(65, 6),
(66, 6),
(67, 6),
(68, 6),
(69, 6),
(70, 6),
(71, 6),
(72, 2),
(74, 6),
(75, 6),
(77, 6),
(73, 2),
(78, 6);

-- --------------------------------------------------------

--
-- Table structure for table `admincourse_admintrainer`
--

CREATE TABLE `admincourse_admintrainer` (
  `admincourse_id` bigint(20) UNSIGNED NOT NULL,
  `admintrainer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admincourse_order`
--

CREATE TABLE `admincourse_order` (
  `admincourse_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminevents`
--

CREATE TABLE `adminevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `venue` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(251) NOT NULL,
  `buttonlink` varchar(255) DEFAULT NULL,
  `buttontext` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` int(255) NOT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminevents`
--

INSERT INTO `adminevents` (`id`, `user_id`, `title`, `image`, `description`, `venue`, `startdate`, `enddate`, `starttime`, `endtime`, `buttonlink`, `buttontext`, `type`, `price`, `usertype`, `status`, `userid`, `useremail`, `username`, `created_at`, `updated_at`) VALUES
(1, 0, 'Shamanic healing journey with pavla', '1680936484.png', '<p>I am Neo Shamanic Healing Arts transformational guide Working with our spiritual guides and the powerful Bio energy field that is present all around us, removing, shifting and healing from the very core, whatever it might be that is stopping you from living your best life. In our sessions we can foacus on the following:</p>\r\n<ul>\r\n<li>Physical pain within the body- organ support</li>\r\n<li>Deep Emotional Trauma Release</li>\r\n<li>Stress, anxiety, Depression, Sleep issues</li>\r\n<li>Chakra balance bringing Harmony and Peace</li>\r\n<li>Ancestral Clearing</li>\r\n<li>Negative entities and attachment clearing</li>\r\n</ul>\r\n<p>I am a Quantum Flow practitioner Your guide towards transformation where we rewire the brain, change limiting beliefs, old patterns that no longer serve, shift old crystalised energy from the energetic centers and expand the electromagnetic field around us, raising our vibration and getting into the present state of being. ( just to name a few)</p>', 'test venue', '2023-06-14', '2023-07-27', '10:00 AM', '14:00 PM', '#', 'Register Now', 'admin', 500, NULL, 'Published', NULL, NULL, NULL, '2023-04-07 02:27:52', '2023-04-09 20:37:58'),
(2, 0, 'Event 2', '1680854788.png', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Victoria', '2023-07-18', '2023-08-31', '11:00 AM', '17:00 PM', '#', 'Book', 'admin', 111, NULL, 'Published', NULL, NULL, NULL, '2023-04-07 02:30:49', '2023-04-09 20:38:15'),
(3, 0, 'Event 3', '1680854913.png', '<p>Event2</p>', 'Event2', '2023-07-27', '2023-09-30', '16:00 PM', '20:00 PM', '#', 'Book Now', 'admin', 0, NULL, 'Published', NULL, NULL, NULL, '2023-04-07 02:39:01', '2023-04-09 20:38:37'),
(11, 30, 'User event updtes', '1681116303.jpg', '<p>gfhgfhghfhgfh updated by user</p>', 'rterter', '2023-04-13', '2023-04-13', '12:00 PM', '14:00 PM', '#', 'Book Now', 'user', 454, 'user', 'Published', 30, 'User2023@mail.com', 'User2023', '2023-04-10 01:17:05', '2023-04-10 03:15:03'),
(12, 30, 'User event 2', '1681117407.png', '<p>asdsadaad</p>', 'asda', '2023-04-15', '2023-04-14', '15:00 PM', '17:00 PM', '#', 'Book Now', 'user', 2000, 'user', 'Published', 30, 'User2023@mail.com', 'User2023', '2023-04-10 03:33:27', '2023-04-10 03:33:27'),
(13, 30, 'dasd', '1681118274.jpg', '<p>sdfdsfss</p>', 'asdas', '2023-04-19', '2023-04-15', '15:00 PM', '16:00 PM', '#', 'Book Now', 'user', 232, 'user', 'Draft', 30, 'User2023@mail.com', 'User2023', '2023-04-10 03:47:54', '2023-04-10 03:47:54'),
(14, 30, 'dasdd', '1681118348.jpg', '<p>sdfdsfss</p>', 'asdas', '2023-04-19', '2023-04-15', '15:00 PM', '16:00 PM', '#', 'Book Now', 'user', 232, 'user', 'Draft', 30, 'User2023@mail.com', 'User2023', '2023-04-10 03:49:08', '2023-04-10 03:49:08'),
(15, 30, 'dasddss', '1681118491.jpg', '<p>sdfdsfss</p>', 'asdas', '2023-04-19', '2023-04-15', '15:00 PM', '16:00 PM', '#', 'Book Now', 'user', 232, 'user', 'Draft', 30, 'User2023@mail.com', 'User2023', '2023-04-10 03:51:31', '2023-04-10 03:51:31'),
(16, 51, 'Test event', '1681119138.png', '<p>czxczc</p>', 'kahhkj', '2023-04-12', '2023-04-15', '15:00 PM', '17:00 PM', '#', 'Book Now', 'user', 1200, 'user', 'Draft', 51, 'user1@summer.com', 'test', '2023-04-10 04:02:18', '2023-04-10 04:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `admingeneralsettings`
--

CREATE TABLE `admingeneralsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `terms` longtext DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `refund_policy` longtext DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admingeneralsettings`
--

INSERT INTO `admingeneralsettings` (`id`, `logo`, `favicon`, `terms`, `privacy_policy`, `refund_policy`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '1679276810.png', '1679276870.png', '<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>', '<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>\r\n<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>', '<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>\r\n<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>\r\n<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>\r\n<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>\r\n<p>This tool makes the work easier for the webmaster.</p>', 'All Rights Reserved 2023', '2023-01-04 23:02:23', '2023-03-19 20:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `adminondemandcats`
--

CREATE TABLE `adminondemandcats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminondemandcats`
--

INSERT INTO `adminondemandcats` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'On demand', '2023-03-08 00:11:31', '2023-03-08 00:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `adminondemands`
--

CREATE TABLE `adminondemands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `excerpt` longtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `ondemand_category` varchar(255) DEFAULT NULL,
  `subscription` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `embed_url` longtext DEFAULT NULL,
  `trainers` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminondemands`
--

INSERT INTO `adminondemands` (`id`, `title`, `slug`, `description`, `excerpt`, `featured_image`, `ondemand_category`, `subscription`, `scheduledate`, `scheduletime`, `level`, `status`, `embed_url`, `trainers`, `price`, `created_at`, `updated_at`) VALUES
(1, 'On demand Course', 'on-demand-course', '<p>adfgdfgdfgss</p>', '<p>gfdfg</p>', 'common_banner.jpg', '2', '2', '2023-03-23', '08:00 AM', 'Beginner', 'Published', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '3,4', 110, '2023-03-08 21:41:51', '2023-03-08 21:55:03'),
(2, 'On demand Course2', 'on-demand-course2', '<p>On demand Course2</p>', '<p>On demand Course2</p>', 'common_banner.jpg', '2', '1', '2023-03-24', '11:00 AM', 'Beginner', 'Published', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '17', 50, '2023-03-15 02:38:51', '2023-03-15 02:38:51'),
(3, 'On demand Course3', 'on-demand-course3', '<p>On demand Course3</p>', '<p>On demand Course3</p>', 'common_banner.jpg', '2', '1', '2023-03-31', '09:30 AM', 'Beginner', 'Published', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '17,18', 80, '2023-03-15 02:42:03', '2023-03-15 02:54:43'),
(4, 'On demand Course4', 'on-demand-course4', '<p>On demand Course4</p>', '<p>On demand Course4</p>', '1678868908.jpg', '2', '1', '2023-03-15', '01:00 AM', 'Beginner', 'Published', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/D0UnqGm_miA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '4', 500, '2023-03-15 02:58:28', '2023-03-15 02:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `adminondemand_adminondemandcat`
--

CREATE TABLE `adminondemand_adminondemandcat` (
  `adminondemand_id` bigint(20) UNSIGNED NOT NULL,
  `adminondemandcat_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminondemand_adminondemandcat`
--

INSERT INTO `adminondemand_adminondemandcat` (`adminondemand_id`, `adminondemandcat_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `adminondemand_adminsubscription`
--

CREATE TABLE `adminondemand_adminsubscription` (
  `adminondemand_id` bigint(20) UNSIGNED NOT NULL,
  `adminsubscription_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminondemand_adminsubscription`
--

INSERT INTO `adminondemand_adminsubscription` (`adminondemand_id`, `adminsubscription_id`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminondemand_admintrainer`
--

CREATE TABLE `adminondemand_admintrainer` (
  `adminondemand_id` bigint(20) UNSIGNED NOT NULL,
  `admintrainer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminondemand_admintrainer`
--

INSERT INTO `adminondemand_admintrainer` (`adminondemand_id`, `admintrainer_id`) VALUES
(1, 3),
(1, 4),
(2, 17),
(3, 17),
(3, 18),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `adminpages`
--

CREATE TABLE `adminpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `section1_heading` varchar(251) DEFAULT NULL,
  `section2_heading` varchar(251) DEFAULT NULL,
  `section3_heading` varchar(251) DEFAULT NULL,
  `section4_heading` varchar(251) DEFAULT NULL,
  `section5_heading` varchar(255) DEFAULT NULL,
  `section6_heading` varchar(251) DEFAULT NULL,
  `section1` longtext DEFAULT NULL,
  `section2` longtext DEFAULT NULL,
  `section3` longtext DEFAULT NULL,
  `section4` longtext DEFAULT NULL,
  `section5` longtext DEFAULT NULL,
  `section6` longtext DEFAULT NULL,
  `google_store_url` varchar(251) DEFAULT NULL,
  `apple_store_url` varchar(251) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpages`
--

INSERT INTO `adminpages` (`id`, `title`, `slug`, `description`, `section1_heading`, `section2_heading`, `section3_heading`, `section4_heading`, `section5_heading`, `section6_heading`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `google_store_url`, `apple_store_url`, `banner_image`, `seo_title`, `seo_description`, `seo_keyword`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '<h2>What Is Meant By Lorem Ipsum In Website?</h2>\r\n<p>The word Lorem Ipsum is derived from the Latin word which means &ldquo;pain itself&rdquo;. It is a kind of a text filler tool that is used by the webmaster on the website.</p>\r\n<p>Basically, this tool is used to create dummy content on the website when it&rsquo;s new.</p>', 'Summer Healing Society', 'Subscription Plans', 'About Summer Healing Society', 'Yoga Trainings', 'Download our app', 'Summer Healing Yoga’s mission is to develop and expand the study of consciousness into our society.', '<p data-sal=\"slide-up\">Summer Healing is an International Religious Organisation, located in Sydney Road, Brunswick, Summer Healing is a Yoga Studio, Wellness Center, Ministry and Ecstatic Temple for our Members. The first of its kind in the Society; we offer the benefits of yoga&mdash;health, light, spirituality&mdash;while maintaining the strength and diversity of the members we serve. Our focus is also on teacher training, movement through music, collaboration, and heart. Summer Healing Brunswick welcomes yoga practitioner members with good standing, inclusive of all levels and from all socio-economic backgrounds that are in agreement with our Society Articles.</p>', '<p data-sal=\"slide-up\">The Summer Healing is a private membership organisation nestled within larger associations similarly established. By definition, a PCA is private, it is established by contract, and it is a free association of like-minded, like spirited-beings with shared purpose, intentions and aspirations. &nbsp;Summer Healing is a private society established as a sovereign ecclesiastical global society, within which is the Summer Healing Society.</p>', '<p data-sal=\"slide-up\">The Summer Healing Private Contract Association (&ldquo;PCA&rdquo;) is a private membership organisation nestled within larger associations similarly established. By definition, a PCA is private, it is established by contract, and it is a free association of like-minded, like spirited-beings with shared purpose, intentions and aspirations. &nbsp;Summer Healing is a private society established as a sovereign ecclesiastical global society, within which is the Summer Healing Society.</p>', '<p data-sal=\"slide-up\">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum</p>', '<p data-sal=\"slide-up\">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum</p>', '<p data-sal=\"slide-up\">This is implemented through connecting like-minded people whose passion and interests revolve around building a community of health and empathic awareness.</p>\r\n<p data-sal=\"slide-up\">We also seek to improve the bio-psycho-social-spiritual health of the general populous, and aim to do so via the intelligent science of yoga. By connecting the community to the precepts of yoga in Melbourne, we aim to kindle a spiritual awakening, encompassing the health promoting benefits of holistic, complementary and alternative healing methodologies to create a unity of body, mind and soul. This communion of action, thought and deed stems from an awareness of our place and part within the whole, and the interwoven nature of all life, and all levels of consciousness.</p>', 'https://play.google.com', 'https://www.apple.com/au/store', '1672841948.jpg', 'Summer Healing Society | Home', 'Summer healing yoga', 'yoga, bestyoga', 1, NULL, '2023-01-04 08:49:08', '2023-08-24 14:00:08'),
(2, 'About', 'about', '<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>', 'Who we are', 'Members Offerings', 'Our Mission', 'Download our app', NULL, NULL, '<h3>Why Lorem Ipsum Is Used?</h3>\r\n<p>It helps the designer plan where the content will sit. It helps in creating drafts of the content on the pages of the website. It originates from the Latin text but is seen as gibberish.</p>\r\n<p>Sometimes, the reader gets distracted while creating or working on the website. That&rsquo;s why this language is important.</p>', '<p class=\"sal-animate\" style=\"--sal-duration: 2s;\" data-sal=\"slide-up\">We have a small group of members that provide services, and we have a larger group of members hat receive services, but all members have the right to offer services to all members if they agree with the ethics to heal one another, defend each other&rsquo;s rights and better the sustainability of the earth, mankind and co-create together as a mutual benefit society.</p>\r\n<p class=\"sal-animate\" style=\"--sal-duration: 3s;\" data-sal=\"slide-up\">If you have something to offer our members, we would love to hear from you, please write a one-page article about how we can support your offerings and what you would like to offer.</p>', '<p class=\"sal-animate\" style=\"--sal-duration: 2s;\" data-sal=\"slide-up\">Summer Healing Society/ Ministry is an integral Holistic Remembering of education, tools, and resources for the members of the Society to access true freedom and Health throughout every aspect of their lives. It is the Mission and Invocation of SUMMERHEALING Association to integrate and present a comprehensive understanding of How All The Parts of Life sometimes called the Matrix or duality all Fits Together, all of the elements, form, a matter of creation that create our world: history, law, money, jurisdiction, who we truly are, and how our mind and body work and are influenced out and into homeostasis. We offer an accessible and comprehensive system of different courses. Online or at our Temple.</p>', '<p class=\"sal-animate\" style=\"--sal-duration: 2s;\" data-sal=\"slide-up\">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum</p>', NULL, NULL, NULL, NULL, '1672841991.jpg', 'About | Summer Healing Society', 'Contact', 'Contact', 1, NULL, '2023-01-04 08:49:51', '2023-07-14 21:43:20'),
(3, 'Contact', 'contact', '<p>Contact</p>', 'Contact', 'Contact', NULL, 'Contact', NULL, NULL, '<p>Contact</p>', '<p>Contact</p>', '<p>Contact</p>', '<p>Contact</p>', NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, '2023-01-12 00:39:33', '2023-01-12 00:30:10', '2023-01-12 00:39:33'),
(4, 'Terms', 'terms', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', 'Terms | Summer Healing Society', NULL, NULL, 1, NULL, '2023-02-01 21:23:05', '2023-07-14 21:43:29'),
(5, 'Privacy Policy', 'privacy-policy', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-02-01 21:23:34', '2023-02-01 22:19:27'),
(6, 'Refund Policy', 'refund-policy', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-02-01 21:23:48', '2023-02-01 22:19:42'),
(7, 'Sacred Constitution', 'sacred-constitution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:16', '2023-05-18 07:25:16'),
(8, 'Codes Of Conduct', 'codes-of-conduct', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:27', '2023-05-18 07:25:27'),
(9, 'Peace Declaration Agreement', 'peace-declaration-agreement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:32', '2023-08-24 14:00:48'),
(10, 'Public Notice', 'public-notice', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:38', '2023-05-18 07:25:38'),
(11, 'Statement By Supplier', 'statement-by-supplier', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:44', '2023-05-18 07:25:44'),
(12, 'Privy Council', 'privy-council', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:50', '2023-05-18 07:25:50'),
(13, 'Declaration Of Decree', 'declaration-of-decree', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:25:56', '2023-05-18 07:25:56'),
(14, 'Board of Trustees', 'board-of-trustees', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:04', '2023-05-18 07:26:04'),
(15, 'Gazetted', 'gazetted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:11', '2023-05-18 07:26:11'),
(16, 'Declaration of Intention', 'declaration-of-intention', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:17', '2023-05-18 07:26:17'),
(17, 'Ecclesiastical Court', 'ecclesiastical-court', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:22', '2023-05-18 07:26:22'),
(18, 'International Reference RR159057983AU', 'international-reference-rr159057983au', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:28', '2023-05-18 07:26:28'),
(19, 'Summer Healing Constitution', 'summer-healing-constitution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:34', '2023-05-18 07:26:34'),
(20, 'Proclamation Of Peace', 'proclamation-of-peace', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:40', '2023-05-18 07:26:40'),
(21, 'Summer Healing Trust', 'summer-healing-trust', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:48', '2023-05-18 07:26:48'),
(22, 'Power Of Attorney', 'power-of-attorney', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:26:54', '2023-05-18 07:26:54'),
(23, 'Public Declaration', 'public-declaration', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'common_banner.jpg', NULL, NULL, NULL, 1, NULL, '2023-05-18 07:27:01', '2023-05-18 07:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `adminpaymentsettings`
--

CREATE TABLE `adminpaymentsettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_test_publishable_key` varchar(255) DEFAULT NULL,
  `stripe_test_secret_key` varchar(255) DEFAULT NULL,
  `stripe_live_publishable_key` varchar(255) DEFAULT NULL,
  `stripe_live_secret_key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminpaymentsettings`
--

INSERT INTO `adminpaymentsettings` (`id`, `stripe_test_publishable_key`, `stripe_test_secret_key`, `stripe_live_publishable_key`, `stripe_live_secret_key`, `created_at`, `updated_at`) VALUES
(1, 'pk_test_51IaIAHSB3wDJDTy6OG8vAzOROQQaxHHF4Xx2DR3MPvPikjUZcm4llTN0krHpA2GNz0RkOu1NxTvmUeKGd9d1FYG900d4hvN1it', 'sk_test_51IaIAHSB3wDJDTy66QoMfRprJTfgVQYvRug2UWTJoTHHwykoem5nVpViif6AHNCSliWAhIv3545AUCzqSHWhLhC60089k4RQvM', NULL, NULL, NULL, '2023-06-21 22:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `adminreports`
--

CREATE TABLE `adminreports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminschedulecats`
--

CREATE TABLE `adminschedulecats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminschedules`
--

CREATE TABLE `adminschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `courseid` int(20) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `scheduledate` varchar(255) DEFAULT NULL,
  `scheduledateend` varchar(255) DEFAULT NULL,
  `scheduletime` varchar(255) DEFAULT NULL,
  `scheduletimeend` varchar(255) DEFAULT NULL,
  `totalduration` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `name` varchar(251) DEFAULT NULL,
  `type` varchar(251) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `startRecur` varchar(255) DEFAULT NULL,
  `endRecur` varchar(251) DEFAULT NULL,
  `daysOfWeek` varchar(255) DEFAULT NULL,
  `days` varchar(255) DEFAULT NULL,
  `schedule_type` varchar(251) DEFAULT NULL,
  `groupId` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminschedules`
--

INSERT INTO `adminschedules` (`id`, `title`, `slug`, `courseid`, `level`, `scheduledate`, `scheduledateend`, `scheduletime`, `scheduletimeend`, `totalduration`, `status`, `date`, `name`, `type`, `uid`, `start`, `end`, `startRecur`, `endRecur`, `daysOfWeek`, `days`, `schedule_type`, `groupId`, `created_at`, `updated_at`) VALUES
(81, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-20', '2023-05-20', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-05-20\"', 'Hot Hatha Bikram Style', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 10:51:57', '2023-07-03 13:48:29'),
(82, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-05-20', '2023-05-20', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-20\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:01:22', '2023-07-03 11:05:07'),
(83, 'Hot Strong Yoga', 'hot-strong-yoga-live-stream', 72, NULL, '2023-05-20', '2023-05-20', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-20\"', 'Hot Strong Yoga', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:04:43', '2023-07-03 11:07:25'),
(84, 'Infra Red Sauna, Ice Bath and Rebirthing Breathwork Immersion', NULL, 43, NULL, '2023-05-20', '2023-05-20', '12:00 PM', '17:00 PM', '5', 'Published', '\"2023-05-20\"', 'Infra Red Sauna, Ice Bath and Rebirthing Breathwork Immersion', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:44:23', '2023-06-27 10:50:41'),
(85, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-05-20', '2023-05-20', '16:00 PM', '17:15 PM', '1', 'Published', '\"2023-05-20\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:49:24', '2023-05-18 06:54:12'),
(86, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-20', '2023-05-20', '17:30 PM', '18:30 PM', '1', 'Published', '\"2023-05-20\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:56:34', '2023-07-03 13:49:03'),
(87, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-20', '2023-05-20', '06:00 AM', '07:00 AM', '1', 'Published', '\"2023-05-20\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 11:58:21', '2023-05-17 11:58:21'),
(88, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-20', '2023-05-20', '06:00 AM', '07:00 AM', '1', 'Published', '\"2023-05-20\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:00:20', '2023-07-03 13:49:03'),
(89, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-20', '2023-05-20', '07:30 AM', '08:30 AM', '1', 'Published', '\"2023-05-20\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-20 00:00:00', '2023-05-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:04:28', '2023-05-17 12:04:28'),
(90, 'Dynamic Strengthening Class', 'dynamic-strengthening-class', 32, NULL, '2023-05-21', '2023-05-21', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-05-21\"', 'Dynamic Strengthening Class', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:38:18', '2023-05-17 12:38:18'),
(91, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-05-21', '2023-05-21', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-21\"', 'Hot Power yoga', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:39:11', '2023-05-17 12:39:11'),
(92, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-05-21', '2023-05-21', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-21\"', 'Hot Power yoga', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:40:37', '2023-05-17 12:40:37'),
(93, 'Remedial Massage Rebirthing Breathwork Private Session', 'satsang-gyan-yoga', 54, NULL, '2023-05-21', '2023-05-21', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-21\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:42:25', '2023-05-17 12:47:46'),
(94, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-21', '2023-05-21', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-21\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:43:44', '2023-07-03 13:49:03'),
(95, 'Slow Flow Seva', 'slow-flow-seva', 56, NULL, '2023-05-21', '2023-05-21', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-05-21\"', 'Slow Flow Seva', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:44:24', '2023-05-17 12:44:24'),
(96, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-21', '2023-05-21', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-05-21\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:48:55', '2023-05-17 12:48:55'),
(97, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-05-21', '2023-05-21', '02:00 AM', '03:30 AM', '1', 'Published', '\"2023-05-21\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:49:45', '2023-07-03 12:01:27'),
(98, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-21', '2023-05-21', '02:00 AM', '03:00 AM', '1', 'Published', '\"2023-05-21\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:50:41', '2023-07-03 13:49:03'),
(99, 'Chai Chat Chill', 'chai-chat-chill', 28, NULL, '2023-05-21', '2023-05-21', '04:00 AM', '05:00 AM', '1', 'Published', '\"2023-05-21\"', 'Chai Chat Chill', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:51:15', '2023-07-03 12:03:13'),
(100, 'Ariel Yoga   (Beginner Friendly)', 'infra-red-sauna', 26, NULL, '2023-05-21', '2023-05-21', '04:00 AM', '05:00 AM', '1', 'Published', '\"2023-05-21\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 12:52:36', '2023-07-03 12:01:27'),
(101, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-21', '2023-05-21', '05:15 AM', '06:15 AM', '1', 'Published', '\"2023-05-21\"', 'Infra Red Sauna', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:00:31', '2023-05-17 13:00:31'),
(102, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-21', '2023-05-21', '05:15 AM', '06:15 AM', '1', 'Published', '\"2023-05-21\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:01:52', '2023-07-03 13:49:03'),
(103, 'Rebirthing Breathwork', 'rebirthing-breathwork', 50, NULL, '2023-05-21', '2023-05-21', '05:30 AM', '07:00 AM', '1', 'Published', '\"2023-05-21\"', 'Rebirthing Breathwork', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:02:45', '2023-05-17 13:02:45'),
(104, 'Soup Night $7 Donation', 'soup-night-7-donation', 69, NULL, '2023-05-21', '2023-05-21', '07:00 AM', '08:00 AM', '1', 'Published', '\"2023-05-21\"', 'Soup Night $7 Donation', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:04:37', '2023-07-03 11:21:04'),
(105, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-21', '2023-05-21', '07:30 AM', '08:30 AM', '1', 'Published', '\"2023-05-21\"', 'Infra Red Sauna', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:05:15', '2023-05-17 13:05:15'),
(106, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-05-21', '2023-05-21', '07:45 AM', '09:00 AM', '1', 'Published', '\"2023-05-21\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-05-21 00:00:00', '2023-05-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-17 13:06:12', '2023-07-03 11:33:41'),
(111, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-22', '2023-05-22', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-22\"', 'Infra Red Sauna', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:16:03', '2023-05-18 07:18:00'),
(112, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-05-22', '2023-05-22', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-22\"', 'Vinyasa flow', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:19:17', '2023-05-18 07:19:17'),
(113, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-22', '2023-05-22', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-22\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:19:53', '2023-07-03 13:49:03'),
(114, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-22', '2023-05-22', '12:00 PM', '13:15 PM', '1', 'Published', '\"2023-05-22\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:21:12', '2023-07-03 13:48:29'),
(115, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-05-22', '2023-05-22', '12:00 PM', '13:00 PM', '1', 'Published', '\"2023-05-22\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:24:38', '2023-07-03 11:04:30'),
(116, 'Equity Study', 'equity-study', 33, NULL, '2023-05-22', '2023-05-22', '13:00 PM', '14:00 PM', '1', 'Published', '\"2023-05-22\"', 'Equity Study', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:25:20', '2023-07-03 12:06:57'),
(117, 'Free Style Yoga', 'free-style-yoga', 34, NULL, '2023-05-22', '2023-05-22', '13:00 PM', '14:30 PM', '1', 'Published', '\"2023-05-22\"', 'Free Style Yoga', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:25:58', '2023-05-18 07:25:58'),
(118, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-22', '2023-05-22', '13:30 PM', '14:30 PM', '1', 'Published', '\"2023-05-22\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:27:05', '2023-05-18 07:27:05'),
(122, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-05-22', '2023-05-22', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-05-22\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:42:31', '2023-05-18 07:42:31'),
(123, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', 68, NULL, '2023-05-22', '2023-05-22', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-05-22\"', 'Yoga Nidra Audio Guided', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:44:48', '2023-07-03 11:32:29'),
(124, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-05-22', '2023-05-22', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-22\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:46:17', '2023-07-03 11:33:41'),
(125, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-22', '2023-05-22', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-22\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:47:30', '2023-07-03 13:49:03'),
(126, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-22', '2023-05-22', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-22\"', 'Hot Vinyasa', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 07:48:23', '2023-05-18 07:48:23'),
(127, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-22', '2023-05-22', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-22\"', 'Infra Red Sauna', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:26:04', '2023-05-18 08:26:04'),
(128, 'Vinyasa', 'vinyasa', 60, NULL, '2023-05-22', '2023-05-22', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-22\"', 'Vinyasa', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:33:22', '2023-05-18 08:33:22'),
(129, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-05-22', '2023-05-22', '07:20 PM', '08:45 PM', '1', 'Published', '\"2023-05-22\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:34:24', '2023-07-03 11:33:10'),
(130, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-05-22', '2023-05-22', '07:20 PM', '08:20 PM', '1', 'Published', '\"2023-05-22\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:36:29', '2023-07-03 11:33:10'),
(131, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-22', '2023-05-22', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-22\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-22 00:00:00', '2023-05-22 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:37:20', '2023-07-03 13:49:03'),
(132, 'Vinyasa', 'vinyasa', 60, NULL, '2023-05-23', '2023-05-23', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-05-23\"', 'Vinyasa', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:44:33', '2023-05-18 08:44:33'),
(133, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-05-23', '2023-05-23', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-05-23\"', 'Vinyasa - Livestream', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:45:34', '2023-07-03 11:23:42'),
(134, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-23', '2023-05-23', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-23\"', 'Hot Vinyasa', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:46:58', '2023-05-18 08:46:58'),
(135, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-05-23', '2023-05-23', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-23\"', 'Vinyasa - Livestream', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:47:42', '2023-07-03 11:23:42'),
(136, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-23', '2023-05-23', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-23\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:48:43', '2023-07-03 13:49:03'),
(137, 'Yin And Mediation', 'yin-and-mediation', 66, NULL, '2023-05-23', '2023-05-23', '12:30 PM', '01:45 PM', '1', 'Published', '\"2023-05-23\"', 'Yin And Mediation', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:50:49', '2023-07-03 11:28:01'),
(138, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-05-23', '2023-05-23', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-05-23\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:52:10', '2023-05-18 08:52:10'),
(139, 'Rebirthing Breathwork Cave Room', 'rebirthing-breathwork-cave-room', 51, NULL, '2023-05-23', '2023-05-23', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-05-23\"', 'Rebirthing Breathwork Cave Room', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:53:26', '2023-05-18 08:53:26'),
(140, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-23', '2023-05-23', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-23\"', 'Hot Vinyasa', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:57:43', '2023-05-18 08:57:43'),
(141, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-23', '2023-05-23', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-23\"', 'Infra Red Sauna', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:58:49', '2023-05-18 08:58:49'),
(142, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-23', '2023-05-23', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-05-23\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 08:59:24', '2023-07-03 13:49:03'),
(143, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-05-23', '2023-05-23', '07:30 PM', '08:45 PM', '1', 'Published', '\"2023-05-23\"', 'Yin Yoga', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:00:03', '2023-05-18 09:00:03'),
(144, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-23', '2023-05-23', '07:30 PM', '06:30 PM', '1', 'Published', '\"2023-05-23\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-23 00:00:00', '2023-05-23 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:01:12', '2023-07-03 13:49:03'),
(145, 'OSHO Active Meditations', 'osho-active-meditations', 48, NULL, '2023-05-24', '2023-05-24', '07:00 AM', '08:15 AM', '1', 'Published', '\"2023-05-24\"', 'OSHO Active Meditations', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:43:17', '2023-05-18 09:43:17'),
(146, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-05-24', '2023-05-24', '08:30 AM', '09:30 AM', '1', 'Published', '\"2023-05-24\"', 'Hatha Yoga', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:44:18', '2023-07-03 12:05:52'),
(147, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-24', '2023-05-24', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-24\"', 'Infra Red Sauna', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:44:59', '2023-05-18 09:44:59'),
(148, 'Hot Strong Vinyasa', 'hot-strong-vinyasa', 40, NULL, '2023-05-24', '2023-05-24', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-24\"', 'Hot Strong Vinyasa', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:46:11', '2023-05-18 09:46:11'),
(149, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-24', '2023-05-24', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-24\"', 'Infra Red Sauna', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:46:49', '2023-05-18 09:46:49'),
(150, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style', 75, NULL, '2023-05-24', '2023-05-24', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-24\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:47:38', '2023-07-03 11:04:30'),
(151, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-24', '2023-05-24', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-24\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:52:54', '2023-07-03 13:48:29'),
(152, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-24', '2023-05-24', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-05-24\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:54:59', '2023-05-18 09:54:59'),
(153, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-05-24', '2023-05-24', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-24\"', 'Vinyasa flow', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 09:56:23', '2023-05-18 09:56:23'),
(154, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-24', '2023-05-24', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-24\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:20:26', '2023-07-03 13:49:03'),
(155, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-05-24', '2023-05-24', '07:30 PM', '08:45 PM', '1', 'Published', '\"2023-05-24\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-05-24 00:00:00', '2023-05-24 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:21:38', '2023-05-18 10:23:57'),
(156, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-05-25', '2023-05-25', '08:00 AM', '09:15 AM', '1', 'Published', '\"2023-05-25\"', 'Yin Yoga', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:37:59', '2023-05-18 10:41:21'),
(157, 'Vinyasa', 'vinyasa', 60, NULL, '2023-05-25', '2023-05-25', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-25\"', 'Vinyasa', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:44:15', '2023-05-18 10:44:15'),
(158, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-25', '2023-05-25', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-05-25\"', 'Infra Red Sauna', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:45:08', '2023-05-18 10:45:08'),
(159, 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'kundalini-yoga-pranayama-yin-live-stream', 70, NULL, '2023-05-25', '2023-05-25', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-25\"', 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:45:50', '2023-07-03 11:16:38'),
(160, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-05-25', '2023-05-25', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-25\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:46:24', '2023-05-18 10:46:24'),
(161, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-25', '2023-05-25', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-25\"', 'Infra Red Sauna', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:47:15', '2023-05-18 10:47:15'),
(162, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-25', '2023-05-25', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-05-25\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:48:12', '2023-05-18 10:48:12'),
(163, 'Meditation audio guided', 'meditation-audio-guided', 46, NULL, '2023-05-25', '2023-05-25', '01:45 PM', '02:45 PM', '1', 'Published', '\"2023-05-25\"', 'Meditation audio guided', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:49:49', '2023-05-18 10:49:49'),
(164, 'Rebirthing Breathwork', 'rebirthing-breathwork', 50, NULL, '2023-05-25', '2023-05-25', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-05-25\"', 'Rebirthing Breathwork', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:50:42', '2023-05-18 10:51:41'),
(165, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-25', '2023-05-25', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-25\"', 'Infra Red Sauna', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:52:51', '2023-05-18 10:52:51'),
(166, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-05-25', '2023-05-25', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-25\"', 'Hatha Yoga', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:53:49', '2023-07-03 12:05:52'),
(167, 'Sound Mediation', 'sound-mediation', 58, NULL, '2023-05-25', '2023-05-25', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-25\"', 'Sound Mediation', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:54:27', '2023-05-18 10:54:27'),
(168, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-25', '2023-05-25', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-25\"', 'Infra Red Sauna', 'event', NULL, '2023-05-25 00:00:00', '2023-05-25 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 10:55:18', '2023-05-18 10:55:18'),
(169, 'Hot Power Vinyasa', 'hot-power-vinyasa', 38, NULL, '2023-05-26', '2023-05-26', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-05-26\"', 'Hot Power Vinyasa', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:07:48', '2023-05-18 11:07:48'),
(170, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-26', '2023-05-26', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-26\"', 'Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:08:20', '2023-05-18 11:08:20'),
(171, 'Prana Vinyasa', 'prana-vinyasa', 49, NULL, '2023-05-26', '2023-05-26', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-05-26\"', 'Prana Vinyasa', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:08:51', '2023-05-18 11:08:51'),
(172, 'Prana Vinyasa - Live Stream', 'prana-vinyasa-live-stream', 71, NULL, '2023-05-26', '2023-05-26', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-05-26\"', 'Prana Vinyasa - Live Stream', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:09:26', '2023-07-03 14:41:34'),
(173, 'Yin Yoga Seva class', 'yin-yoga-seva-class', 64, NULL, '2023-05-26', '2023-05-26', '11:30 AM', '12:30 PM', '1', 'Published', '\"2023-05-26\"', 'Yin Yoga Seva class', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:10:00', '2023-05-18 11:10:00'),
(174, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-26', '2023-05-26', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-26\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:12:26', '2023-07-03 13:49:03'),
(175, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-26', '2023-05-26', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-05-26\"', 'Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:13:29', '2023-05-18 11:13:29'),
(176, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-26', '2023-05-26', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-05-26\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:14:02', '2023-07-03 13:49:03'),
(177, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-26', '2023-05-26', '03:00 PM', '04:00 PM', '1', 'Published', '\"2023-05-26\"', 'Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:14:42', '2023-05-18 11:14:42'),
(178, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-05-26', '2023-05-26', '03:00 PM', '04:15 PM', '1', 'Published', '\"2023-05-26\"', 'Yin Yoga', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:15:12', '2023-05-18 11:15:12'),
(179, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-05-26', '2023-05-26', '05:10 PM', '05:40 PM', '0', 'Published', '\"2023-05-26\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:16:00', '2023-05-18 11:16:00'),
(180, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-26', '2023-05-26', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-26\"', 'Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:16:45', '2023-05-18 11:16:45'),
(181, 'Reiki and Yin Yoga', 'reiki-and-yin-yoga', 53, NULL, '2023-05-26', '2023-05-26', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-26\"', 'Reiki and Yin Yoga', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:17:21', '2023-05-18 11:17:44'),
(182, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-26', '2023-05-26', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-26\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-26 00:00:00', '2023-05-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:19:16', '2023-07-03 13:49:03'),
(183, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-27', '2023-05-27', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-05-27\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:48:53', '2023-07-03 13:48:29'),
(184, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-05-27', '2023-05-27', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-27\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:49:27', '2023-07-03 11:05:07'),
(185, 'Hot Strong Yoga', 'hot-strong-yoga', 72, NULL, '2023-05-27', '2023-05-27', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-27\"', 'Hot Strong Yoga', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 11:50:35', '2023-07-03 11:07:25'),
(186, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-05-27', '2023-05-27', '04:00 PM', '05:15 PM', '1', 'Published', '\"2023-05-27\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:08:38', '2023-05-18 12:08:38'),
(187, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-27', '2023-05-27', '05:30 PM', '06:30 PM', '1', 'Published', '\"2023-05-27\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:15:13', '2023-07-03 13:49:03'),
(188, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-05-27', '2023-05-27', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-27\"', 'Hatha Yoga', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:16:06', '2023-07-03 12:05:52'),
(189, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-27', '2023-05-27', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-27\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:16:42', '2023-05-18 12:16:42'),
(190, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-27', '2023-05-27', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-27\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:17:32', '2023-07-03 13:49:03'),
(191, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-27', '2023-05-27', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-27\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-27 00:00:00', '2023-05-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:18:25', '2023-05-18 12:18:25'),
(192, 'Dynamic Strengthening Class', 'dynamic-strengthening-class', 32, NULL, '2023-05-28', '2023-05-28', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-05-28\"', 'Dynamic Strengthening Class', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:26:58', '2023-05-18 12:26:58'),
(193, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-28', '2023-05-28', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-28\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:27:31', '2023-05-18 12:27:31'),
(194, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-28', '2023-05-28', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-28\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:31:28', '2023-07-03 13:49:03'),
(195, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-05-28', '2023-05-28', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-05-28\"', 'Hot Power yoga', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:32:20', '2023-05-18 12:32:20'),
(196, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-05-28', '2023-05-28', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-05-28\"', 'Hot Power yoga', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:33:14', '2023-05-18 12:33:14'),
(197, 'Slow Flow Seva', 'slow-flow-seva', 56, NULL, '2023-05-28', '2023-05-28', '11:00 AM', '12:15 PM', '1', 'Published', '\"2023-05-28\"', 'Slow Flow Seva', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:34:37', '2023-05-18 12:34:37'),
(198, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-28', '2023-05-28', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-05-28\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:35:07', '2023-05-18 12:35:07'),
(199, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-05-28', '2023-05-28', '02:00 PM', '03:30 PM', '1', 'Published', '\"2023-05-28\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:35:46', '2023-07-03 12:01:27'),
(200, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-28', '2023-05-28', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-05-28\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:36:27', '2023-07-03 13:49:03'),
(201, 'Chai Chat Chill', 'chai-chat-chill', 28, NULL, '2023-05-28', '2023-05-28', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-05-28\"', 'Chai Chat Chill', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:36:56', '2023-07-03 12:03:13'),
(202, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-28', '2023-05-28', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-05-28\"', 'Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:37:39', '2023-05-18 12:37:39'),
(203, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-05-28', '2023-05-28', '04:00 PM', '03:30 PM', '0', 'Published', '\"2023-05-28\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:39:21', '2023-07-03 12:01:27'),
(204, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-28', '2023-05-28', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-05-28\"', 'Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:40:14', '2023-05-18 12:40:14'),
(205, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-28', '2023-05-28', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-05-28\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:41:15', '2023-07-03 13:49:03'),
(206, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-with-didgeridoo', 52, NULL, '2023-05-28', '2023-05-28', '05:30 PM', '07:00 PM', '1', 'Published', '\"2023-05-28\"', 'Rebirthing Breathwork with Didgeridoo', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:42:31', '2023-05-18 12:42:31'),
(207, 'Chakra Dhyana Meditation', 'chakra-dhyana-meditation', 29, NULL, '2023-05-28', '2023-05-28', '06:15 PM', '07:15 PM', '1', 'Published', '\"2023-05-28\"', 'Chakra Dhyana Meditation', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:44:06', '2023-05-18 12:44:06'),
(208, 'Soup Night $7 Donation', 'soup-night-7-donation', 69, NULL, '2023-05-28', '2023-05-28', '07:00 PM', '06:00 PM', '1', 'Published', '\"2023-05-28\"', 'Soup Night $7 Donation', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:44:39', '2023-07-03 11:21:04'),
(209, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-28', '2023-05-28', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-28\"', 'Infra Red Sauna', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:45:13', '2023-05-18 12:45:13'),
(210, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-05-28', '2023-05-28', '07:45 PM', '09:00 PM', '1', 'Published', '\"2023-05-28\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-05-28 00:00:00', '2023-05-28 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-18 12:46:09', '2023-05-18 12:46:09'),
(211, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-29', '2023-05-29', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-29\"', 'Infra Red Sauna', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:11:55', '2023-05-19 06:11:55'),
(212, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-05-29', '2023-05-29', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-29\"', 'Vinyasa flow', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:13:31', '2023-05-19 06:13:49'),
(213, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-29', '2023-05-29', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-29\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:14:41', '2023-07-03 13:49:03'),
(214, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-05-29', '2023-05-29', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-29\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:15:40', '2023-07-03 11:04:30'),
(215, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-29', '2023-05-29', '12:00 PM', '01:15 PM', '1', 'Published', '\"2023-05-29\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:16:57', '2023-07-03 13:48:29'),
(216, 'Free Style Yoga', 'free-style-yoga', 34, NULL, '2023-05-29', '2023-05-29', '01:00 PM', '02:30 PM', '1', 'Published', '\"2023-05-29\"', 'Free Style Yoga', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:17:46', '2023-05-19 06:17:46'),
(217, 'Equity Study', 'equity-study', 33, NULL, '2023-05-29', '2023-05-29', '01:00 PM', '02:00 PM', '1', 'Published', '\"2023-05-29\"', 'Equity Study', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:18:16', '2023-07-03 12:06:57'),
(218, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-29', '2023-05-29', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-05-29\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:19:22', '2023-05-19 06:19:22'),
(219, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-05-29', '2023-05-29', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-05-29\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:20:25', '2023-05-19 06:20:25'),
(220, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', 68, NULL, '2023-05-29', '2023-05-29', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-05-29\"', 'Yoga Nidra Audio Guided', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:20:59', '2023-07-03 11:32:29'),
(221, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-29', '2023-05-29', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-29\"', 'Hot Vinyasa', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:21:55', '2023-05-19 06:21:55'),
(222, 'Vinyasa', 'vinyasa', 60, NULL, '2023-05-29', '2023-05-29', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-29\"', 'Vinyasa', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:22:40', '2023-05-19 06:22:40'),
(223, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-05-29', '2023-05-29', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-29\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 06:24:55', '2023-07-03 11:33:41'),
(224, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-29', '2023-05-29', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-29\"', 'Infra Red Sauna', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:02:14', '2023-05-19 07:02:14'),
(225, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-29', '2023-05-29', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-29\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:03:46', '2023-07-03 13:49:03'),
(226, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-05-29', '2023-05-29', '07:20 PM', '08:20 PM', '1', 'Published', '\"2023-05-29\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:04:36', '2023-07-03 11:33:10'),
(227, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-05-29', '2023-05-29', '07:20 PM', '08:45 PM', '1', 'Published', '\"2023-05-29\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:05:47', '2023-07-03 11:33:10'),
(228, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-29', '2023-05-29', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-29\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-29 00:00:00', '2023-05-29 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:06:28', '2023-07-03 13:49:03'),
(229, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-05-30', '2023-05-30', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-05-30\"', 'Vinyasa - Livestream', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:12:13', '2023-07-03 11:23:42'),
(230, 'Vinyasa', 'vinyasa-livestream', 60, NULL, '2023-05-30', '2023-05-30', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-05-30\"', 'Vinyasa', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:13:00', '2023-05-19 07:15:19'),
(231, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-30', '2023-05-30', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-30\"', 'Hot Vinyasa', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:15:54', '2023-05-19 07:15:54'),
(232, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-05-30', '2023-05-30', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-30\"', 'Vinyasa - Livestream', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:17:04', '2023-07-03 11:23:42'),
(233, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-30', '2023-05-30', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-30\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:17:33', '2023-07-03 13:49:03'),
(234, 'Yin And Mediation', 'yin-and-mediation', 66, NULL, '2023-05-30', '2023-05-30', '12:30 PM', '01:45 PM', '1', 'Published', '\"2023-05-30\"', 'Yin And Mediation', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:18:44', '2023-07-03 11:28:01'),
(235, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-05-30', '2023-05-30', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-05-30\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:19:30', '2023-05-19 07:19:30'),
(236, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-30', '2023-05-30', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-30\"', 'Infra Red Sauna', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:22:00', '2023-05-19 07:22:00'),
(237, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-05-30', '2023-05-30', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-30\"', 'Hot Vinyasa', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:22:33', '2023-05-19 07:22:33');
INSERT INTO `adminschedules` (`id`, `title`, `slug`, `courseid`, `level`, `scheduledate`, `scheduledateend`, `scheduletime`, `scheduletimeend`, `totalduration`, `status`, `date`, `name`, `type`, `uid`, `start`, `end`, `startRecur`, `endRecur`, `daysOfWeek`, `days`, `schedule_type`, `groupId`, `created_at`, `updated_at`) VALUES
(238, 'Rebirthing Breathwork Cave Room', 'rebirthing-breathwork-cave-room', 51, NULL, '2023-05-30', '2023-05-30', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-05-30\"', 'Rebirthing Breathwork Cave Room', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:23:25', '2023-05-19 07:23:25'),
(239, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-30', '2023-05-30', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-05-30\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:24:25', '2023-07-03 13:49:03'),
(240, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-05-30', '2023-05-30', '07:30 PM', '07:45 PM', '0', 'Published', '\"2023-05-30\"', 'Yin Yoga', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:25:05', '2023-05-19 07:25:05'),
(241, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-30', '2023-05-30', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-05-30\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-30 00:00:00', '2023-05-30 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:25:48', '2023-07-03 13:49:03'),
(242, 'OSHO Active Meditations', 'osho-active-meditations', 48, NULL, '2023-05-31', '2023-05-31', '07:00 AM', '08:15 AM', '1', 'Published', '\"2023-05-31\"', 'OSHO Active Meditations', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:38:09', '2023-05-19 07:38:09'),
(243, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-05-31', '2023-05-31', '08:30 AM', '09:30 AM', '1', 'Published', '\"2023-05-31\"', 'Hatha Yoga', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:39:02', '2023-07-03 12:05:52'),
(244, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-31', '2023-05-31', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-05-31\"', 'Infra Red Sauna', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:39:53', '2023-05-19 07:39:53'),
(245, 'Vinyasa', 'vinyasa', 60, NULL, '2023-05-31', '2023-05-31', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-05-31\"', 'Vinyasa', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:40:32', '2023-05-19 07:40:32'),
(246, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-05-31', '2023-05-31', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-05-31\"', 'Infra Red Sauna', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:40:57', '2023-05-19 07:40:57'),
(247, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-05-31', '2023-05-31', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-31\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:41:47', '2023-07-03 13:48:29'),
(248, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-05-31', '2023-05-31', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-05-31\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 07:42:35', '2023-07-03 11:04:30'),
(249, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-05-31', '2023-05-31', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-05-31\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:20:55', '2023-05-19 08:20:55'),
(250, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-05-31', '2023-05-31', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-05-31\"', 'Vinyasa flow', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:24:38', '2023-05-19 08:24:38'),
(251, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-05-31', '2023-05-31', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-05-31\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:25:22', '2023-07-03 13:49:03'),
(252, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-05-31', '2023-05-31', '07:30 PM', '08:45 PM', '1', 'Published', '\"2023-05-31\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-05-31 00:00:00', '2023-05-31 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:26:08', '2023-05-19 08:26:08'),
(253, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-01', '2023-06-01', '08:00 AM', '09:15 AM', '1', 'Published', '\"2023-06-01\"', 'Yin Yoga', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:29:13', '2023-05-19 08:29:13'),
(254, 'Hot Strong Vinyasa', 'hot-strong-yoga', 40, NULL, '2023-06-01', '2023-06-01', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-01\"', 'Hot Strong Vinyasa', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:30:36', '2023-05-19 08:33:26'),
(255, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-01', '2023-06-01', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-01\"', 'Infra Red Sauna', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:34:00', '2023-05-19 08:34:00'),
(256, 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'kundalini-yoga-pranayama-yin-live-stream', 70, NULL, '2023-06-01', '2023-06-01', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-01\"', 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:34:55', '2023-07-03 11:16:38'),
(257, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-06-01', '2023-06-01', '12:30 PM', '01:30 AM', '11', 'Published', '\"2023-06-01\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:47:43', '2023-05-19 08:47:43'),
(258, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-01', '2023-06-01', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-01\"', 'Infra Red Sauna', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:50:04', '2023-05-19 08:50:04'),
(259, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-01', '2023-06-01', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-01\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:53:01', '2023-05-19 08:53:01'),
(260, 'Meditation audio guided', 'meditation-audio-guided', 46, NULL, '2023-06-01', '2023-06-01', '01:45 PM', '02:45 PM', '1', 'Published', '\"2023-06-01\"', 'Meditation audio guided', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:54:53', '2023-05-19 08:54:53'),
(261, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-01', '2023-06-01', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-01\"', 'Infra Red Sauna', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:55:28', '2023-05-19 08:55:28'),
(262, 'Rebirthing Breathwork', 'rebirthing-breathwork', 50, NULL, '2023-06-01', '2023-06-01', '09:00 AM', '07:20 PM', '10', 'Published', '\"2023-06-01\"', 'Rebirthing Breathwork', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:56:22', '2023-05-19 08:56:22'),
(263, 'Rebirthing Breathwork', 'rebirthing-breathwork-with-didgeridoo', 50, NULL, '2023-06-01', '2023-06-01', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-01\"', 'Rebirthing Breathwork', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:57:26', '2023-05-19 08:57:41'),
(264, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-01', '2023-06-01', '06:00 PM', '07:15 AM', '10', 'Published', '\"2023-06-01\"', 'Hatha Yoga', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:58:18', '2023-07-03 12:05:52'),
(265, 'Sound Mediation', 'sound-mediation', 58, NULL, '2023-06-01', '2023-06-01', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-01\"', 'Sound Mediation', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 08:59:15', '2023-05-19 08:59:15'),
(266, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-01', '2023-06-01', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-01\"', 'Infra Red Sauna', 'event', NULL, '2023-06-01 00:00:00', '2023-06-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:00:06', '2023-05-19 09:00:06'),
(267, 'Hot Power Vinyasa', 'hot-power-vinyasa', 38, NULL, '2023-06-02', '2023-06-02', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-02\"', 'Hot Power Vinyasa', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:17:40', '2023-05-19 09:17:40'),
(268, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-02', '2023-06-02', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-02\"', 'Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:18:08', '2023-05-19 09:18:08'),
(269, 'Prana Vinyasa', 'prana-vinyasa', 49, NULL, '2023-06-02', '2023-06-02', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-02\"', 'Prana Vinyasa', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:18:46', '2023-05-19 09:18:46'),
(270, 'Prana Vinyasa - Live Stream', 'prana-vinyasa-live-stream', 71, NULL, '2023-06-02', '2023-06-02', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-02\"', 'Prana Vinyasa - Live Stream', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:19:35', '2023-07-03 14:41:34'),
(271, 'Yin Yoga Seva class', 'yin-yoga-seva-class', 64, NULL, '2023-06-02', '2023-06-02', '11:30 AM', '12:30 PM', '1', 'Published', '\"2023-06-02\"', 'Yin Yoga Seva class', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:20:24', '2023-05-19 09:20:24'),
(272, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-02', '2023-06-02', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-02\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 09:21:06', '2023-07-03 13:49:03'),
(273, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-02', '2023-06-02', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-02\"', 'Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:38:01', '2023-05-19 10:38:01'),
(274, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-02', '2023-06-02', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-02\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:39:19', '2023-07-03 13:49:03'),
(275, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-02', '2023-06-02', '03:00 PM', '04:00 PM', '1', 'Published', '\"2023-06-02\"', 'Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:40:16', '2023-05-19 10:40:16'),
(276, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-02', '2023-06-02', '03:00 PM', '04:15 PM', '1', 'Published', '\"2023-06-02\"', 'Yin Yoga', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:41:35', '2023-05-19 10:47:18'),
(277, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-02', '2023-06-02', '03:30 PM', '04:00 PM', '0', 'Published', '\"2023-06-02\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:46:29', '2023-05-19 10:47:07'),
(278, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-02', '2023-06-02', '04:00 PM', '04:30 PM', '0', 'Published', '\"2023-06-02\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:48:14', '2023-05-19 10:48:14'),
(279, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-02', '2023-06-02', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-02\"', 'Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:53:16', '2023-05-19 10:53:16'),
(280, 'Reiki and Yin Yoga', 'reiki-and-yin-yoga', 53, NULL, '2023-06-02', '2023-06-02', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-02\"', 'Reiki and Yin Yoga', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:54:21', '2023-05-19 10:54:21'),
(281, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-02', '2023-06-02', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-02\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-02 00:00:00', '2023-06-02 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:55:09', '2023-07-03 13:49:03'),
(282, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-03', '2023-06-03', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-03\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:57:59', '2023-07-03 13:48:29'),
(283, 'Hot Strong Yoga', 'hot-strong-yoga', 72, NULL, '2023-06-03', '2023-06-03', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-03\"', 'Hot Strong Yoga', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 10:59:17', '2023-07-03 11:07:25'),
(284, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-06-03', '2023-06-03', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-03\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:00:05', '2023-07-03 11:05:07'),
(285, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-03', '2023-06-03', '11:00 AM', '11:30 AM', '0', 'Published', '\"2023-06-03\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:02:17', '2023-05-19 11:02:17'),
(286, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-03', '2023-06-03', '11:30 AM', '12:00 PM', '0', 'Published', '\"2023-06-03\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:02:39', '2023-05-19 11:02:39'),
(287, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-06-03', '2023-06-03', '04:00 PM', '05:15 PM', '1', 'Published', '\"2023-06-03\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:03:36', '2023-05-19 11:03:36'),
(288, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-03', '2023-06-03', '05:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-03\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:04:14', '2023-07-03 13:49:03'),
(289, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-03', '2023-06-03', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-03\"', 'Hatha Yoga', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:13:21', '2023-07-03 12:05:52'),
(290, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-03', '2023-06-03', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-03\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:14:45', '2023-05-19 11:14:45'),
(291, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-03', '2023-06-03', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-03\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:15:32', '2023-07-03 13:49:03'),
(292, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-03', '2023-06-03', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-03\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-03 00:00:00', '2023-06-03 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:19:42', '2023-05-19 11:19:42'),
(293, 'Dynamic Strengthening Class', 'dynamic-strengthening-class', 32, NULL, '2023-06-04', '2023-06-04', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-04\"', 'Dynamic Strengthening Class', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:29:50', '2023-05-19 11:29:50'),
(294, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-06-04', '2023-06-04', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-04\"', 'Hot Power yoga', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:31:31', '2023-05-19 11:31:31'),
(295, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-06-04', '2023-06-04', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-04\"', 'Hot Power yoga', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:32:13', '2023-05-19 11:32:13'),
(296, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-04', '2023-06-04', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-04\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:33:19', '2023-05-19 11:33:19'),
(297, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-04', '2023-06-04', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-04\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:45:11', '2023-07-03 13:49:03'),
(298, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-04', '2023-06-04', '11:00 AM', '12:15 PM', '1', 'Published', '\"2023-06-04\"', 'Vinyasa flow', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:46:08', '2023-05-19 11:46:08'),
(299, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-04', '2023-06-04', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-06-04\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:46:35', '2023-05-19 11:46:35'),
(300, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-04', '2023-06-04', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-04\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:47:18', '2023-07-03 12:01:27'),
(301, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-04', '2023-06-04', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-04\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 11:59:30', '2023-07-03 13:49:03'),
(302, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-04', '2023-06-04', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-04\"', 'Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:00:17', '2023-05-19 12:00:17'),
(303, 'Chai Chat Chill', 'chai-chat-chill', 28, NULL, '2023-06-04', '2023-06-04', '04:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-04\"', 'Chai Chat Chill', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:02:45', '2023-07-03 12:03:13'),
(304, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-04', '2023-06-04', '04:00 PM', '05:30 PM', '1', 'Published', '\"2023-06-04\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:03:23', '2023-07-03 12:01:27'),
(305, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-04', '2023-06-04', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-04\"', 'Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:14:49', '2023-05-19 12:14:49'),
(306, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-04', '2023-06-04', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-04\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:15:43', '2023-07-03 13:49:03'),
(307, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-cave-room', 52, NULL, '2023-06-04', '2023-06-04', '05:30 PM', '07:00 PM', '1', 'Published', '\"2023-06-04\"', 'Rebirthing Breathwork with Didgeridoo', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:18:46', '2023-05-19 12:23:32'),
(308, 'Chakra Dhyana Meditation', 'chakra-dhyana-meditation', 29, NULL, '2023-06-04', '2023-06-04', '06:15 PM', '07:15 PM', '1', 'Published', '\"2023-06-04\"', 'Chakra Dhyana Meditation', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:19:53', '2023-05-19 12:19:53'),
(309, 'Soup Night $7 Donation', 'soup-night-7-donation', 69, NULL, '2023-06-04', '2023-06-04', '07:00 PM', '08:00 PM', '1', 'Published', '\"2023-06-04\"', 'Soup Night $7 Donation', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:20:29', '2023-07-03 11:21:04'),
(310, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-04', '2023-06-04', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-04\"', 'Infra Red Sauna', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:21:05', '2023-05-19 12:21:05'),
(311, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-06-04', '2023-06-04', '07:45 PM', '09:00 PM', '1', 'Published', '\"2023-06-04\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-06-04 00:00:00', '2023-06-04 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:22:13', '2023-05-19 12:22:13'),
(312, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-05', '2023-06-05', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-05\"', 'Infra Red Sauna', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:34:31', '2023-05-19 12:34:31'),
(313, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-05', '2023-06-05', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-05\"', 'Vinyasa flow', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:38:43', '2023-05-19 12:38:53'),
(314, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-05', '2023-06-05', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-05\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:40:29', '2023-07-03 13:49:03'),
(315, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-06-05', '2023-06-05', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-05\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:41:28', '2023-07-03 11:04:30'),
(316, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-05', '2023-06-05', '12:00 PM', '01:15 PM', '1', 'Published', '\"2023-06-05\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 12:59:13', '2023-07-03 13:48:29'),
(317, 'Free Style Yoga', 'free-style-yoga', 34, NULL, '2023-06-05', '2023-06-05', '01:00 PM', '02:30 PM', '1', 'Published', '\"2023-06-05\"', 'Free Style Yoga', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:00:19', '2023-05-19 13:00:19'),
(318, 'Equity Study', 'equity-study', 33, NULL, '2023-06-05', '2023-06-05', '01:00 PM', '02:00 PM', '1', 'Published', '\"2023-06-05\"', 'Equity Study', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:00:55', '2023-07-03 12:06:57'),
(319, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-05', '2023-06-05', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-05\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:01:44', '2023-05-19 13:01:44'),
(320, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-05', '2023-06-05', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-05\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:02:33', '2023-05-19 13:02:33'),
(321, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', 68, NULL, '2023-06-05', '2023-06-05', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-05\"', 'Yoga Nidra Audio Guided', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:03:19', '2023-07-03 11:32:29'),
(322, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-05', '2023-06-05', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-05\"', 'Hot Vinyasa', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:04:11', '2023-05-19 13:04:11'),
(323, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-05', '2023-06-05', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-05\"', 'Vinyasa', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:04:52', '2023-05-19 13:04:52'),
(324, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-06-05', '2023-06-05', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-05\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:05:52', '2023-07-03 11:33:41'),
(325, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-05', '2023-06-05', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-05\"', 'Infra Red Sauna', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:06:21', '2023-05-19 13:06:21'),
(326, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-05', '2023-06-05', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-05\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:07:16', '2023-07-03 13:49:03'),
(327, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-05', '2023-06-05', '07:20 PM', '08:20 PM', '1', 'Published', '\"2023-06-05\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:08:00', '2023-07-03 11:33:10'),
(328, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-05', '2023-06-05', '07:20 PM', '08:45 PM', '1', 'Published', '\"2023-06-05\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:08:52', '2023-07-03 11:33:10'),
(329, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-05', '2023-06-05', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-05\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-05 00:00:00', '2023-06-05 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-19 13:29:43', '2023-07-03 13:49:03'),
(330, 'Vinyasa', 'vinyasa', 60, NULL, '2023-07-06', '2023-07-06', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-07-06\"', 'Vinyasa', 'event', NULL, '2023-07-06 00:00:00', '2023-07-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:12:43', '2023-05-22 06:12:43'),
(331, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-06', '2023-06-06', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-06\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:13:33', '2023-07-03 11:23:42'),
(332, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-06', '2023-06-06', '10:00 AM', '11:45 AM', '1', 'Published', '\"2023-06-06\"', 'Hot Vinyasa', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:14:31', '2023-05-22 06:14:31'),
(333, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-06', '2023-06-06', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-06\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:15:42', '2023-07-03 11:23:42'),
(334, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-06', '2023-06-06', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-06\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:16:55', '2023-07-03 13:49:03'),
(335, 'Yin And Mediation', 'yin-and-mediation', 66, NULL, '2023-06-06', '2023-06-06', '12:30 PM', '01:45 PM', '1', 'Published', '\"2023-06-06\"', 'Yin And Mediation', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:17:42', '2023-07-03 11:28:01'),
(336, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-06', '2023-06-06', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-06\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:18:17', '2023-05-22 06:18:17'),
(337, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-06', '2023-06-06', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-06\"', 'Infra Red Sauna', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:19:39', '2023-05-22 06:19:39'),
(338, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-06', '2023-06-06', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-06\"', 'Hot Vinyasa', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:20:50', '2023-05-22 06:20:50'),
(339, 'Rebirthing Breathwork Cave Room', 'rebirthing-breathwork-cave-room', 51, NULL, '2023-06-06', '2023-06-06', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-06\"', 'Rebirthing Breathwork Cave Room', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:21:51', '2023-05-22 06:21:51'),
(340, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-06', '2023-06-06', '06:30 PM', '05:30 PM', '1', 'Published', '\"2023-06-06\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:24:08', '2023-07-03 13:49:03'),
(341, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-06', '2023-06-06', '07:30 PM', '08:45 AM', '10', 'Published', '\"2023-06-06\"', 'Yin Yoga', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:25:30', '2023-05-22 06:26:51'),
(342, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-06', '2023-06-06', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-06\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-06 00:00:00', '2023-06-06 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:26:36', '2023-07-03 13:49:03'),
(343, 'OSHO Active Meditations', 'osho-active-meditations', 48, NULL, '2023-06-07', '2023-06-07', '07:00 AM', '08:15 AM', '1', 'Published', '\"2023-06-07\"', 'OSHO Active Meditations', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:29:06', '2023-05-22 06:29:06'),
(344, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-07', '2023-06-07', '08:30 AM', '09:30 AM', '1', 'Published', '\"2023-06-07\"', 'Hatha Yoga', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:29:48', '2023-07-03 12:05:52'),
(345, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-07', '2023-06-07', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-07\"', 'Infra Red Sauna', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:30:29', '2023-05-22 06:30:29'),
(346, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-07', '2023-06-07', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-07\"', 'Vinyasa', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:31:32', '2023-05-22 06:31:32'),
(347, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-07', '2023-06-07', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-07\"', 'Infra Red Sauna', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:32:32', '2023-05-22 06:32:32'),
(348, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-06-07', '2023-06-07', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-07\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:33:30', '2023-07-03 11:04:30'),
(349, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-07', '2023-06-07', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-07\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:34:16', '2023-07-03 13:48:29'),
(350, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-07', '2023-06-07', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-07\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-22 06:34:51', '2023-05-22 06:34:51'),
(371, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-07', '2023-06-07', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-07\"', 'Vinyasa flow', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:40:58', '2023-05-24 10:40:58'),
(372, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-07', '2023-06-07', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-07\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:41:18', '2023-07-03 13:49:03'),
(373, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-06-07', '2023-06-07', '07:30 PM', '08:15 PM', '0', 'Published', '\"2023-06-07\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-06-07 00:00:00', '2023-06-07 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:42:00', '2023-05-24 10:42:00'),
(374, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-08', '2023-06-08', '08:00 AM', '09:15 AM', '1', 'Published', '\"2023-06-08\"', 'Yin Yoga', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:43:33', '2023-05-24 10:43:33'),
(375, 'Hot Strong Vinyasa', 'hot-strong-vinyasa', 40, NULL, '2023-06-08', '2023-06-08', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-08\"', 'Hot Strong Vinyasa', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:44:43', '2023-05-24 10:44:43'),
(376, 'Hot Strong Vinyasa', 'hot-strong-vinyasa', 40, NULL, '2023-06-08', '2023-06-08', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-08\"', 'Hot Strong Vinyasa', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:44:43', '2023-05-24 10:44:43'),
(377, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-08', '2023-06-08', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-08\"', 'Infra Red Sauna', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:45:11', '2023-05-24 10:45:11'),
(378, 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'kundalini-yoga-pranayama-yin-live-stream', 70, NULL, '2023-06-08', '2023-06-08', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-08\"', 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:45:55', '2023-07-03 11:16:38'),
(379, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-06-08', '2023-06-08', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-08\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:46:30', '2023-05-24 10:46:30'),
(380, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-08', '2023-06-08', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-08\"', 'Infra Red Sauna', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:47:05', '2023-05-24 10:47:05'),
(381, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-08', '2023-06-08', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-08\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:47:51', '2023-05-24 10:47:51'),
(382, 'Meditation audio guided', 'meditation-audio-guided', 46, NULL, '2023-06-08', '2023-06-08', '01:45 PM', '02:45 PM', '1', 'Published', '\"2023-06-08\"', 'Meditation audio guided', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:48:24', '2023-05-24 10:48:24'),
(383, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-with-didgeridoo', 52, NULL, '2023-06-08', '2023-06-08', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-08\"', 'Rebirthing Breathwork with Didgeridoo', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:49:01', '2023-05-24 10:49:01'),
(384, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-08', '2023-06-08', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-08\"', 'Infra Red Sauna', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:49:27', '2023-05-24 10:49:27'),
(385, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-08', '2023-06-08', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-08\"', 'Hatha Yoga', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:50:39', '2023-07-03 12:05:52'),
(386, 'Sound Mediation', 'sound-mediation', 58, NULL, '2023-06-08', '2023-06-08', '07:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-08\"', 'Sound Mediation', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:51:11', '2023-05-24 10:51:11'),
(387, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-08', '2023-06-08', '07:00 PM', '08:00 PM', '1', 'Published', '\"2023-06-08\"', 'Infra Red Sauna', 'event', NULL, '2023-06-08 00:00:00', '2023-06-08 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 10:51:56', '2023-05-24 10:51:56'),
(388, 'Hot Power Vinyasa', 'hot-power-vinyasa', 38, NULL, '2023-06-09', '2023-06-09', '07:30 AM', '08:30 AM', '1', 'Published', '\"2023-06-09\"', 'Hot Power Vinyasa', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:23:39', '2023-05-24 11:23:39'),
(389, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-09', '2023-06-09', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-09\"', 'Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:24:18', '2023-05-24 11:24:18'),
(390, 'Prana Vinyasa', 'prana-vinyasa', 49, NULL, '2023-06-09', '2023-06-09', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-09\"', 'Prana Vinyasa', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:25:30', '2023-05-24 11:25:30'),
(391, 'Prana Vinyasa - Live Stream', 'prana-vinyasa-live-stream', 71, NULL, '2023-06-09', '2023-06-09', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-09\"', 'Prana Vinyasa - Live Stream', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:26:20', '2023-07-03 14:41:34'),
(392, 'Yin Yoga Seva class', 'yin-yoga', 64, NULL, '2023-06-09', '2023-06-09', '11:30 AM', '12:30 PM', '1', 'Published', '\"2023-06-09\"', 'Yin Yoga Seva class', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:26:58', '2023-05-24 11:27:39'),
(393, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-09', '2023-06-09', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-09\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:28:38', '2023-07-03 13:49:03'),
(394, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-09', '2023-06-09', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-09\"', 'Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:31:59', '2023-05-24 11:31:59'),
(395, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-09', '2023-06-09', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-09\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:32:26', '2023-07-03 13:49:03'),
(396, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-09', '2023-06-09', '03:00 PM', '04:00 PM', '1', 'Published', '\"2023-06-09\"', 'Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:33:35', '2023-05-24 11:33:35'),
(397, 'Yin Yoga', 'infra-red-sauna', 62, NULL, '2023-07-09', '2023-07-09', '03:00 PM', '04:15 PM', '1', 'Published', '\"2023-07-09\"', 'Yin Yoga', 'event', NULL, '2023-07-09 00:00:00', '2023-07-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:33:37', '2023-05-24 11:35:23'),
(398, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-09', '2023-06-09', '03:30 PM', '02:00 PM', '1', 'Published', '\"2023-06-09\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:36:02', '2023-05-24 11:36:02'),
(399, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-09', '2023-06-09', '04:00 PM', '04:30 PM', '0', 'Published', '\"2023-06-09\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:36:28', '2023-05-24 11:36:28'),
(400, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-09', '2023-06-09', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-09\"', 'Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:37:01', '2023-05-24 11:37:01'),
(401, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-09', '2023-06-09', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-09\"', 'Yin Yoga', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:37:38', '2023-05-24 11:38:05'),
(402, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-09', '2023-06-09', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-09\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-09 00:00:00', '2023-06-09 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:38:36', '2023-07-03 13:49:03'),
(403, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-10', '2023-06-10', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-10\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:51:12', '2023-07-03 13:48:29'),
(404, 'Hot Strong Yoga', 'hot-strong-yoga', 72, NULL, '2023-06-10', '2023-06-10', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-10\"', 'Hot Strong Yoga', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:51:48', '2023-07-03 11:07:25'),
(405, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-06-10', '2023-06-10', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-10\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:52:25', '2023-07-03 11:05:07'),
(406, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-10', '2023-06-10', '11:00 AM', '11:30 AM', '0', 'Published', '\"2023-06-10\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:53:26', '2023-05-24 11:53:26');
INSERT INTO `adminschedules` (`id`, `title`, `slug`, `courseid`, `level`, `scheduledate`, `scheduledateend`, `scheduletime`, `scheduletimeend`, `totalduration`, `status`, `date`, `name`, `type`, `uid`, `start`, `end`, `startRecur`, `endRecur`, `daysOfWeek`, `days`, `schedule_type`, `groupId`, `created_at`, `updated_at`) VALUES
(407, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-10', '2023-06-10', '11:30 AM', '12:00 PM', '0', 'Published', '\"2023-06-10\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:56:38', '2023-05-24 11:56:38'),
(408, 'Kundalini and Yin Yoga', 'kundalini-and-yin-yoga', 45, NULL, '2023-06-10', '2023-06-10', '04:00 PM', '05:15 PM', '1', 'Published', '\"2023-06-10\"', 'Kundalini and Yin Yoga', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 11:58:44', '2023-05-24 11:58:44'),
(409, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-10', '2023-06-10', '05:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-10\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 12:06:56', '2023-07-03 13:49:03'),
(410, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-10', '2023-06-10', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-10\"', 'Hatha Yoga', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 12:08:54', '2023-07-03 12:05:52'),
(411, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-10', '2023-06-10', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-10\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 12:09:29', '2023-05-24 12:09:29'),
(412, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-10', '2023-06-10', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-10\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 12:10:03', '2023-07-03 13:49:03'),
(413, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-10', '2023-06-10', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-06-10\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-10 00:00:00', '2023-06-10 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-24 12:10:32', '2023-05-24 12:10:32'),
(414, 'Dynamic Strengthening Class', 'hot-hatha-bikram-style', 32, NULL, '2023-06-11', '2023-06-11', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-11\"', 'Dynamic Strengthening Class', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:21:40', '2023-05-25 09:43:30'),
(415, 'Hot Power yoga', 'hot-strong-yoga', 39, NULL, '2023-06-11', '2023-06-11', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-11\"', 'Hot Power yoga', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:42:12', '2023-05-25 09:43:52'),
(416, 'Hot Power yoga', 'hot-strong-yoga-live-stream', 39, NULL, '2023-06-11', '2023-06-11', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-11\"', 'Hot Power yoga', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:42:39', '2023-05-25 09:44:04'),
(417, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-11', '2023-06-11', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-11\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:44:43', '2023-05-25 09:44:43'),
(418, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-11', '2023-06-11', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-11\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:45:51', '2023-07-03 13:49:03'),
(419, 'Slow Flow Seva', 'slow-flow-seva', 56, NULL, '2023-06-11', '2023-06-11', '11:00 AM', '12:15 PM', '1', 'Published', '\"2023-06-11\"', 'Slow Flow Seva', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:47:02', '2023-05-25 09:47:02'),
(420, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-11', '2023-06-11', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-06-11\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:53:01', '2023-05-25 09:53:01'),
(421, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-11', '2023-06-11', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-11\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:54:52', '2023-07-03 12:01:27'),
(422, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-11', '2023-06-11', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-11\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:55:21', '2023-07-03 13:49:03'),
(423, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-11', '2023-06-11', '04:00 PM', '05:30 PM', '1', 'Published', '\"2023-06-11\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:56:26', '2023-07-03 12:01:27'),
(424, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-11', '2023-06-11', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-11\"', 'Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:57:17', '2023-05-25 09:57:17'),
(425, 'Chai Chat Chill', 'chai-chat-chill', 28, NULL, '2023-06-11', '2023-06-11', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-11\"', 'Chai Chat Chill', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:58:51', '2023-07-03 12:03:13'),
(426, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-11', '2023-06-11', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-11\"', 'Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 09:59:26', '2023-05-25 09:59:26'),
(427, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-11', '2023-06-11', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-11\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:00:16', '2023-07-03 13:49:03'),
(428, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-cave-room', 52, NULL, '2023-06-11', '2023-06-11', '05:30 PM', '07:00 PM', '1', 'Published', '\"2023-06-11\"', 'Rebirthing Breathwork with Didgeridoo', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:01:20', '2023-05-25 10:15:17'),
(429, 'Chakra Dhyana Meditation', 'chakra-dhyana-meditation', 29, NULL, '2023-06-11', '2023-06-11', '06:15 PM', '07:15 PM', '1', 'Published', '\"2023-06-11\"', 'Chakra Dhyana Meditation', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:02:04', '2023-05-25 10:02:04'),
(430, 'Soup Night $7 Donation', 'soup-night-7-donation', 69, NULL, '2023-06-11', '2023-06-11', '07:00 PM', '08:00 PM', '1', 'Published', '\"2023-06-11\"', 'Soup Night $7 Donation', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:04:25', '2023-07-03 11:21:04'),
(431, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-11', '2023-06-11', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-11\"', 'Infra Red Sauna', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:07:55', '2023-05-25 10:07:55'),
(432, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-06-11', '2023-06-11', '07:45 PM', '09:00 PM', '1', 'Published', '\"2023-06-11\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-06-11 00:00:00', '2023-06-11 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:08:39', '2023-05-25 10:08:39'),
(433, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-12', '2023-06-12', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-12\"', 'Infra Red Sauna', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:26:49', '2023-05-25 10:26:49'),
(434, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-12', '2023-06-12', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-12\"', 'Vinyasa flow', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:27:58', '2023-05-25 10:27:58'),
(435, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-12', '2023-06-12', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-12\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:28:37', '2023-07-03 13:49:03'),
(436, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-12', '2023-06-12', '12:00 PM', '01:15 PM', '1', 'Published', '\"2023-06-12\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:30:30', '2023-07-03 13:48:29'),
(437, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-06-12', '2023-06-12', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-12\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:30:54', '2023-07-03 11:04:30'),
(438, 'Free Style Yoga', 'free-style-yoga', 34, NULL, '2023-06-12', '2023-06-12', '01:00 PM', '02:30 PM', '1', 'Published', '\"2023-06-12\"', 'Free Style Yoga', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:31:48', '2023-05-25 10:31:48'),
(439, 'Equity Study', 'equity-study', 33, NULL, '2023-06-12', '2023-06-12', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-12\"', 'Equity Study', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:32:31', '2023-07-03 12:06:57'),
(440, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-12', '2023-06-12', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-12\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:33:34', '2023-05-25 10:33:34'),
(441, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-12', '2023-06-12', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-12\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:34:09', '2023-05-25 10:34:09'),
(442, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', 68, NULL, '2023-06-12', '2023-06-12', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-12\"', 'Yoga Nidra Audio Guided', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:34:42', '2023-07-03 11:32:29'),
(443, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-06-12', '2023-06-12', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-12\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:35:26', '2023-07-03 11:33:41'),
(444, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-12', '2023-06-12', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-12\"', 'Vinyasa', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:36:00', '2023-05-25 10:36:00'),
(445, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-12', '2023-06-12', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-12\"', 'Hot Vinyasa', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:36:42', '2023-05-25 10:36:42'),
(446, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-12', '2023-06-12', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-12\"', 'Infra Red Sauna', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:37:18', '2023-05-25 10:37:18'),
(447, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-12', '2023-06-12', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-12\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:37:47', '2023-07-03 13:49:03'),
(448, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-12', '2023-06-12', '07:20 PM', '08:45 PM', '1', 'Published', '\"2023-06-12\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:38:40', '2023-07-03 11:33:10'),
(449, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-12', '2023-06-12', '07:20 PM', '06:20 PM', '1', 'Published', '\"2023-06-12\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:39:26', '2023-07-03 11:33:10'),
(450, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-12', '2023-06-12', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-12\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-12 00:00:00', '2023-06-12 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 10:41:19', '2023-07-03 13:49:03'),
(451, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-13', '2023-06-13', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-13\"', 'Vinyasa', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:09:04', '2023-05-25 11:09:04'),
(452, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-13', '2023-06-13', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-13\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:09:36', '2023-07-03 11:23:42'),
(453, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-13', '2023-06-13', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-13\"', 'Hot Vinyasa', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:10:19', '2023-05-25 11:10:19'),
(454, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-13', '2023-06-13', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-13\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:10:54', '2023-07-03 11:23:42'),
(455, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-13', '2023-06-13', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-13\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:11:40', '2023-07-03 13:49:03'),
(456, 'Yin And Mediation', 'yin-and-mediation', 66, NULL, '2023-06-13', '2023-06-13', '12:30 PM', '01:45 PM', '1', 'Published', '\"2023-06-13\"', 'Yin And Mediation', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:13:33', '2023-07-03 11:28:01'),
(457, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-13', '2023-06-13', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-13\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:14:56', '2023-05-25 11:14:56'),
(458, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-13', '2023-06-13', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-13\"', 'Hot Vinyasa', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:16:28', '2023-05-25 11:16:28'),
(459, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-13', '2023-06-13', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-13\"', 'Infra Red Sauna', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:17:03', '2023-05-25 11:17:03'),
(460, 'Rebirthing Breathwork with Didgeridoo', 'rebirthing-breathwork-with-didgeridoo', 52, NULL, '2023-06-13', '2023-06-13', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-13\"', 'Rebirthing Breathwork with Didgeridoo', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:18:39', '2023-05-25 11:18:39'),
(461, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-13', '2023-06-13', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-06-13\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:19:58', '2023-07-03 13:49:03'),
(462, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-13', '2023-06-13', '07:30 PM', '08:45 PM', '1', 'Published', '\"2023-06-13\"', 'Yin Yoga', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:20:52', '2023-05-25 11:20:52'),
(463, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-13', '2023-06-13', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-13\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-13 00:00:00', '2023-06-13 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-05-25 11:21:42', '2023-07-03 13:49:03'),
(473, 'OSHO Active Meditations', 'osho-active-meditations', 48, NULL, '2023-06-14', '2023-06-14', '07:00 AM', '08:15 AM', '1', 'Published', '\"2023-06-14\"', 'OSHO Active Meditations', 'event', NULL, '2023-06-14 07:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:05:02', '2023-06-06 08:05:02'),
(474, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-14', '2023-06-14', '08:30 AM', '09:30 AM', '1', 'Published', '\"2023-06-14\"', 'Hatha Yoga', 'event', NULL, '2023-06-14 08:30:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:05:49', '2023-07-03 12:05:52'),
(476, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-14', '2023-06-14', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-14\"', 'Infra Red Sauna', 'event', NULL, '2023-06-14 10:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:15:30', '2023-06-06 08:15:30'),
(477, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-14', '2023-06-14', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-14\"', 'Vinyasa', 'event', NULL, '2023-06-14 10:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:16:18', '2023-06-06 08:16:18'),
(478, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-14', '2023-06-14', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-14\"', 'Infra Red Sauna', 'event', NULL, '2023-06-14 12:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:17:00', '2023-06-06 08:17:00'),
(479, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style-live', 75, NULL, '2023-06-14', '2023-06-14', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-14\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-06-14 12:30:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:17:46', '2023-07-03 11:04:30'),
(480, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-14', '2023-06-14', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-14\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-14 12:30:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:18:16', '2023-07-03 13:48:29'),
(481, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-14', '2023-06-14', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-14\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-14 01:30:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:19:01', '2023-06-06 08:19:01'),
(482, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-14', '2023-06-14', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-14\"', 'Vinyasa flow', 'event', NULL, '2023-06-14 06:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:19:51', '2023-06-06 08:20:28'),
(483, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-14', '2023-06-14', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-14\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-14 06:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:21:55', '2023-07-03 13:49:03'),
(484, 'Ascension Meditation', 'ascension-meditation', 77, NULL, '2023-06-14', '2023-06-14', '07:00 PM', '08:00 PM', '1', 'Published', '\"2023-06-14\"', 'Ascension Meditation', 'event', NULL, '2023-06-14 07:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:25:04', '2023-07-03 10:50:28'),
(485, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-06-14', '2023-06-14', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-14\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-06-14 07:30:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:26:53', '2023-06-06 08:26:53'),
(486, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-15', '2023-06-15', '08:00 AM', '09:15 AM', '1', 'Published', '\"2023-06-15\"', 'Yin Yoga', 'event', NULL, '2023-06-15 08:00:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:32:00', '2023-06-06 08:32:00'),
(487, 'Hot Strong Vinyasa', 'hot-strong-vinyasa', 40, NULL, '2023-06-14', '2023-06-14', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-14\"', 'Hot Strong Vinyasa', 'event', NULL, '2023-06-14 10:00:00', '2023-06-14 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:34:15', '2023-06-06 08:34:15'),
(488, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-15', '2023-06-15', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-15\"', 'Infra Red Sauna', 'event', NULL, '2023-06-15 10:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:39:24', '2023-06-06 08:39:24'),
(489, 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'kundalini-yoga-pranayama-yin-live-stream', 70, NULL, '2023-06-15', '2023-06-15', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-15\"', 'Kundalini Yoga, Pranayama & Yin - Live Stream', 'event', NULL, '2023-06-15 12:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:40:11', '2023-07-03 11:16:38'),
(490, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-15', '2023-06-15', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-15\"', 'Infra Red Sauna', 'event', NULL, '2023-06-15 12:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 08:42:58', '2023-06-06 08:42:58'),
(491, 'Kundalini Tantra Yoga', 'kundalini-tantra-yoga', 78, NULL, '2023-06-15', '2023-06-15', '12:30 PM', '01:30 PM', '1', 'Published', '\"2023-06-15\"', 'Kundalini Tantra Yoga', 'event', NULL, '2023-06-15 12:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:16:47', '2023-08-23 13:57:05'),
(492, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-15', '2023-06-15', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-15\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-15 01:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:17:24', '2023-06-06 09:17:24'),
(493, 'Rebirthing Breathwork', 'rebirthing-breathwork-with-didgeridoo', 50, NULL, '2023-06-15', '2023-06-15', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-15\"', 'Rebirthing Breathwork', 'event', NULL, '2023-06-15 06:00:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:18:05', '2023-06-06 10:35:33'),
(494, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-15', '2023-06-15', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-15\"', 'Infra Red Sauna', 'event', NULL, '2023-06-15 06:00:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:18:33', '2023-06-06 09:18:33'),
(495, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-15', '2023-06-15', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-15\"', 'Hatha Yoga', 'event', NULL, '2023-06-15 06:00:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:19:24', '2023-07-03 12:05:52'),
(496, 'Sound Mediation', 'sound-mediation', 58, NULL, '2023-06-15', '2023-06-15', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-15\"', 'Sound Mediation', 'event', NULL, '2023-06-15 07:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:20:08', '2023-06-06 09:20:08'),
(497, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-15', '2023-06-15', '07:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-15\"', 'Infra Red Sauna', 'event', NULL, '2023-06-15 07:30:00', '2023-06-15 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 09:20:57', '2023-06-06 09:20:57'),
(498, 'Hot Power Vinyasa', 'hot-power-vinyasa', 38, NULL, '2023-06-16', '2023-06-16', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-16\"', 'Hot Power Vinyasa', 'event', NULL, '2023-06-16 07:30:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:41:20', '2023-06-06 10:41:20'),
(499, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-16', '2023-06-16', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-16\"', 'Infra Red Sauna', 'event', NULL, '2023-06-16 10:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:41:47', '2023-06-06 10:41:47'),
(500, 'Prana Vinyasa', 'prana-vinyasa', 49, NULL, '2023-06-16', '2023-06-16', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-16\"', 'Prana Vinyasa', 'event', NULL, '2023-06-16 10:30:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:42:24', '2023-06-06 10:42:24'),
(501, 'Prana Vinyasa - Live Stream', 'prana-vinyasa-live-stream', 71, NULL, '2023-06-16', '2023-06-16', '10:30 AM', '11:30 AM', '1', 'Published', '\"2023-06-16\"', 'Prana Vinyasa - Live Stream', 'event', NULL, '2023-06-16 10:30:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:48:54', '2023-07-03 14:41:34'),
(502, 'Yin Yoga Seva class', 'yin-yoga-seva-class', 64, NULL, '2023-06-16', '2023-06-16', '11:30 AM', '12:30 PM', '1', 'Published', '\"2023-06-16\"', 'Yin Yoga Seva class', 'event', NULL, '2023-06-16 11:30:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:49:26', '2023-06-06 10:49:26'),
(503, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-16', '2023-06-16', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-16\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-16 12:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:50:20', '2023-07-03 13:49:03'),
(504, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-16', '2023-06-16', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-16\"', 'Infra Red Sauna', 'event', NULL, '2023-06-16 02:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:51:27', '2023-06-06 10:51:27'),
(505, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-16', '2023-06-16', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-16\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-16 02:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:52:01', '2023-07-03 13:49:03'),
(506, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-16', '2023-06-16', '03:00 PM', '04:00 PM', '1', 'Published', '\"2023-06-16\"', 'Infra Red Sauna', 'event', NULL, '2023-06-16 03:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:52:59', '2023-06-06 10:52:59'),
(507, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-16', '2023-06-16', '03:00 PM', '04:15 PM', '1', 'Published', '\"2023-06-16\"', 'Yin Yoga', 'event', NULL, '2023-06-16 03:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:53:36', '2023-06-06 10:53:36'),
(508, 'Tarot Card Reading - Please offer Bella contribution on the day', 'tarot-card-reading-please-offer-bella-contribution-on-the-day', 59, NULL, '2023-06-16', '2023-06-16', '05:10 PM', '05:40 PM', '30', 'Published', '\"2023-06-16\"', 'Tarot Card Reading - Please offer Bella contribution on the day', 'event', NULL, '2023-06-16 05:10:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:54:59', '2023-06-06 10:54:59'),
(509, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-16', '2023-06-16', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-16\"', 'Infra Red Sauna', 'event', NULL, '2023-06-16 06:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:55:23', '2023-06-06 10:55:23'),
(510, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-16', '2023-06-16', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-16\"', 'Yin Yoga', 'event', NULL, '2023-06-16 06:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:55:59', '2023-06-06 10:55:59'),
(511, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-16', '2023-06-16', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-16\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-16 06:00:00', '2023-06-16 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 10:56:40', '2023-07-03 13:49:03'),
(512, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-17', '2023-06-17', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-17\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-17 08:00:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:04:30', '2023-07-03 13:48:29'),
(513, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-06-17', '2023-06-17', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-17\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-06-17 09:30:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:06:25', '2023-07-03 11:05:07'),
(514, 'Hot Strong Yoga', 'hot-strong-yoga', 72, NULL, '2023-06-17', '2023-06-17', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-17\"', 'Hot Strong Yoga', 'event', NULL, '2023-06-17 09:30:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:07:34', '2023-07-03 11:07:25'),
(515, 'Kundalini Tantra Yoga', 'kundalini-tantra-yoga', 78, NULL, '2023-06-17', '2023-06-17', '04:00 PM', '05:15 PM', '1', 'Published', '\"2023-06-17\"', 'Kundalini Tantra Yoga', 'event', NULL, '2023-06-17 04:00:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:08:25', '2023-08-23 13:57:05'),
(516, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-17', '2023-06-17', '05:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-17\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-17 05:30:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:09:08', '2023-07-03 13:49:03'),
(517, 'Hatha Yoga', 'hatha-yoga', 36, NULL, '2023-06-17', '2023-06-17', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-17\"', 'Hatha Yoga', 'event', NULL, '2023-06-17 06:00:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:09:40', '2023-07-03 12:05:52'),
(518, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-17', '2023-06-17', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-17\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-17 06:00:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:10:10', '2023-06-06 11:10:10'),
(519, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-17', '2023-06-17', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-17\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-17 06:00:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:10:44', '2023-07-03 13:49:03'),
(520, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-17', '2023-06-17', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-06-17\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-17 06:30:00', '2023-06-17 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:13:11', '2023-06-06 11:13:11'),
(521, 'Dynamic Strengthening Class', 'dynamic-strengthening-class', 32, NULL, '2023-06-18', '2023-06-18', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-06-18\"', 'Dynamic Strengthening Class', 'event', NULL, '2023-06-18 08:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:21:35', '2023-06-06 11:21:35'),
(522, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-18', '2023-06-18', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-18\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-18 09:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:22:14', '2023-07-03 13:49:03'),
(523, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-06-18', '2023-06-18', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-06-18\"', 'Hot Power yoga', 'event', NULL, '2023-06-18 09:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:31:19', '2023-06-06 11:31:19'),
(524, 'Hot Power yoga', 'hot-power-yoga', 39, NULL, '2023-06-18', '2023-06-18', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-18\"', 'Hot Power yoga', 'event', NULL, '2023-06-18 09:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:32:03', '2023-06-06 11:32:03'),
(525, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-18', '2023-06-18', '09:30 AM', '10:30 AM', '1', 'Published', '\"2023-06-18\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-18 09:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:32:56', '2023-06-06 11:32:56'),
(526, 'Slow Flow Seva', 'slow-flow-seva', 56, NULL, '2023-06-18', '2023-06-18', '11:00 AM', '12:15 PM', '1', 'Published', '\"2023-06-18\"', 'Slow Flow Seva', 'event', NULL, '2023-06-18 11:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:33:39', '2023-06-06 11:33:39'),
(527, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-18', '2023-06-18', '11:00 AM', '12:00 PM', '1', 'Published', '\"2023-06-18\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-18 11:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:34:09', '2023-06-06 11:34:09'),
(528, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-18', '2023-06-18', '02:00 PM', '03:30 PM', '1', 'Published', '\"2023-06-18\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-18 02:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:34:44', '2023-07-03 12:01:27'),
(529, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-18', '2023-06-18', '02:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-18\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-18 02:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:35:47', '2023-07-03 13:49:03'),
(530, 'Ariel Yoga   (Beginner Friendly)', 'ariel-yoga-beginner-friendly', 26, NULL, '2023-06-18', '2023-06-18', '04:00 PM', '05:30 PM', '1', 'Published', '\"2023-06-18\"', 'Ariel Yoga   (Beginner Friendly)', 'event', NULL, '2023-06-18 04:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:36:24', '2023-07-03 12:01:27'),
(531, 'Chai Chat Chill', 'chai-chat-chill', 28, NULL, '2023-06-18', '2023-06-18', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-18\"', 'Chai Chat Chill', 'event', NULL, '2023-06-18 04:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:38:28', '2023-07-03 12:03:13'),
(532, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-18', '2023-06-18', '04:00 PM', '03:00 PM', '1', 'Published', '\"2023-06-18\"', 'Infra Red Sauna', 'event', NULL, '2023-06-18 04:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:39:02', '2023-06-06 11:39:02'),
(533, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-18', '2023-06-18', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-18\"', 'Infra Red Sauna', 'event', NULL, '2023-06-18 05:15:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:42:27', '2023-06-06 11:42:27'),
(534, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-18', '2023-06-18', '05:15 PM', '06:15 PM', '1', 'Published', '\"2023-06-18\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-18 05:15:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:43:37', '2023-07-03 13:49:03'),
(535, 'Rebirthing Breathwork', 'rebirthing-breathwork', 50, NULL, '2023-06-18', '2023-06-18', '05:30 PM', '06:30 PM', '1', 'Published', '\"2023-06-18\"', 'Rebirthing Breathwork', 'event', NULL, '2023-06-18 05:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 11:44:20', '2023-06-06 11:44:20'),
(536, 'Chakra Dhyana Meditation', 'chakra-dhyana-meditation', 29, NULL, '2023-06-18', '2023-06-18', '06:15 PM', '07:15 PM', '1', 'Published', '\"2023-06-18\"', 'Chakra Dhyana Meditation', 'event', NULL, '2023-06-18 06:15:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 12:04:44', '2023-06-06 12:04:44'),
(537, 'Soup Night $7 Donation', 'soup-night-7-donation', 69, NULL, '2023-06-18', '2023-06-18', '07:00 PM', '08:00 PM', '1', 'Published', '\"2023-06-18\"', 'Soup Night $7 Donation', 'event', NULL, '2023-06-18 07:00:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 12:05:13', '2023-07-03 11:21:04'),
(538, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-18', '2023-06-18', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-18\"', 'Infra Red Sauna', 'event', NULL, '2023-06-18 07:30:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 12:06:10', '2023-06-06 12:06:10'),
(539, 'Yin Yoga and Sound Journey', 'yin-yoga-and-sound-journey', 63, NULL, '2023-06-18', '2023-06-18', '07:45 PM', '09:00 PM', '1', 'Published', '\"2023-06-18\"', 'Yin Yoga and Sound Journey', 'event', NULL, '2023-06-18 07:45:00', '2023-06-18 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-06 12:07:06', '2023-06-06 12:07:06'),
(540, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-19', '2023-06-19', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-19\"', 'Infra Red Sauna', 'event', NULL, '2023-06-19 10:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:44:41', '2023-06-07 08:44:41'),
(541, 'Vinyasa flow', 'vinyasa-flow', 61, NULL, '2023-06-19', '2023-06-19', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-19\"', 'Vinyasa flow', 'event', NULL, '2023-06-19 10:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:45:25', '2023-06-07 08:45:25'),
(542, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-19', '2023-06-19', '10:00 AM', '11:00 AM', '1', 'Published', '\"2023-06-19\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-19 10:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:46:12', '2023-07-03 13:49:03'),
(543, 'Hot Hatha (Bikram Style) -LIVE', 'hot-hatha-bikram-style', 75, NULL, '2023-06-19', '2023-06-19', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-19\"', 'Hot Hatha (Bikram Style) -LIVE', 'event', NULL, '2023-06-19 12:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:47:50', '2023-07-03 11:04:30'),
(544, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-06-19', '2023-06-19', '12:00 PM', '01:15 PM', '1', 'Published', '\"2023-06-19\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-06-19 12:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:50:26', '2023-07-03 13:48:29'),
(545, 'Free Style Yoga', 'free-style-yoga', 34, NULL, '2023-06-19', '2023-06-19', '01:00 PM', '02:30 PM', '1', 'Published', '\"2023-06-19\"', 'Free Style Yoga', 'event', NULL, '2023-06-19 01:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:54:55', '2023-06-07 08:54:55'),
(546, 'Equity Study', 'equity-study', 33, NULL, '2023-06-19', '2023-06-19', '01:00 PM', '02:00 PM', '1', 'Published', '\"2023-06-19\"', 'Equity Study', 'event', NULL, '2023-06-19 01:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:57:11', '2023-07-03 12:06:57'),
(547, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-19', '2023-06-19', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-19\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-19 01:30:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 08:59:39', '2023-06-07 08:59:39'),
(548, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-19', '2023-06-19', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-19\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-19 02:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:07:59', '2023-06-07 09:07:59'),
(549, 'Yoga Nidra Audio Guided', 'yoga-nidra-audio-guided', 68, NULL, '2023-06-19', '2023-06-19', '04:00 PM', '05:00 PM', '1', 'Published', '\"2023-06-19\"', 'Yoga Nidra Audio Guided', 'event', NULL, '2023-06-19 04:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:09:17', '2023-07-03 11:32:29'),
(550, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-19', '2023-06-19', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-19\"', 'Hot Vinyasa', 'event', NULL, '2023-06-19 06:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:10:35', '2023-06-07 09:10:35'),
(551, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-19', '2023-06-19', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-19\"', 'Vinyasa', 'event', NULL, '2023-06-19 06:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:11:04', '2023-06-07 09:11:04'),
(552, 'Yin Yoga Satsang And Sound Journey', 'yin-yoga-satsang-and-sound-journey', 65, NULL, '2023-06-19', '2023-06-19', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-19\"', 'Yin Yoga Satsang And Sound Journey', 'event', NULL, '2023-06-19 06:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:14:18', '2023-07-03 11:33:41'),
(553, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-19', '2023-06-19', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-19\"', 'Infra Red Sauna', 'event', NULL, '2023-06-19 06:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:15:46', '2023-06-07 09:15:46'),
(554, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-19', '2023-06-19', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-19\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-19 06:00:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:16:32', '2023-07-03 13:49:03'),
(555, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-19', '2023-06-19', '07:20 PM', '08:20 PM', '1', 'Published', '\"2023-06-19\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-19 07:20:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:20:13', '2023-07-03 11:33:10'),
(556, 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'yin-followed-by-yoga-nidra-deep-relaxation', 67, NULL, '2023-06-19', '2023-06-19', '07:20 PM', '08:45 PM', '1', 'Published', '\"2023-06-19\"', 'Yin Followed by Yoga Nidra ( Deep Relaxation)', 'event', NULL, '2023-06-19 07:20:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:21:18', '2023-07-03 11:33:10'),
(557, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-19', '2023-06-19', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-19\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-19 07:30:00', '2023-06-19 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 09:21:56', '2023-07-03 13:49:03'),
(558, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-20', '2023-06-20', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-20\"', 'Vinyasa', 'event', NULL, '2023-06-20 07:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:11:51', '2023-06-07 10:11:51'),
(559, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-20', '2023-06-20', '07:30 AM', '08:45 AM', '1', 'Published', '\"2023-06-20\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-20 07:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:12:21', '2023-07-03 11:23:42'),
(560, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-20', '2023-06-20', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-20\"', 'Hot Vinyasa', 'event', NULL, '2023-06-20 10:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:14:13', '2023-06-07 10:14:13'),
(561, 'Vinyasa - Livestream', 'vinyasa-livestream', 73, NULL, '2023-06-20', '2023-06-20', '10:00 AM', '11:15 AM', '1', 'Published', '\"2023-06-20\"', 'Vinyasa - Livestream', 'event', NULL, '2023-06-20 10:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:14:53', '2023-07-03 11:23:42'),
(562, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-20', '2023-06-20', '12:00 PM', '01:00 PM', '1', 'Published', '\"2023-06-20\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-20 12:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:15:39', '2023-07-03 13:49:03'),
(563, 'Yin And Mediation', 'yin-and-mediation', 66, NULL, '2023-06-20', '2023-06-20', '12:30 PM', '01:45 PM', '1', 'Published', '\"2023-06-20\"', 'Yin And Mediation', 'event', NULL, '2023-06-20 12:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 10:16:12', '2023-07-03 11:28:01'),
(564, 'Satsang Gyan Yoga', 'satsang-gyan-yoga', 55, NULL, '2023-06-20', '2023-06-20', '02:00 PM', '03:15 PM', '1', 'Published', '\"2023-06-20\"', 'Satsang Gyan Yoga', 'event', NULL, '2023-06-20 02:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:07:36', '2023-06-07 12:07:36'),
(565, 'Hot Vinyasa', 'hot-vinyasa', 41, NULL, '2023-06-20', '2023-06-20', '06:00 PM', '07:15 PM', '1', 'Published', '\"2023-06-20\"', 'Hot Vinyasa', 'event', NULL, '2023-06-20 06:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:08:32', '2023-06-07 12:08:32'),
(566, 'Infra Red Sauna', 'infra-red-sauna', 42, NULL, '2023-06-20', '2023-06-20', '06:00 PM', '07:00 PM', '1', 'Published', '\"2023-06-20\"', 'Infra Red Sauna', 'event', NULL, '2023-06-20 06:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:09:10', '2023-06-07 12:09:10');
INSERT INTO `adminschedules` (`id`, `title`, `slug`, `courseid`, `level`, `scheduledate`, `scheduledateend`, `scheduletime`, `scheduletimeend`, `totalduration`, `status`, `date`, `name`, `type`, `uid`, `start`, `end`, `startRecur`, `endRecur`, `daysOfWeek`, `days`, `schedule_type`, `groupId`, `created_at`, `updated_at`) VALUES
(567, 'Rebirthing Breathwork Cave Room', 'rebirthing-breathwork-cave-room', 51, NULL, '2023-06-20', '2023-06-20', '06:00 PM', '07:20 PM', '1', 'Published', '\"2023-06-20\"', 'Rebirthing Breathwork Cave Room', 'event', NULL, '2023-06-20 06:00:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:10:37', '2023-06-07 12:10:37'),
(568, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-20', '2023-06-20', '06:30 PM', '07:30 PM', '1', 'Published', '\"2023-06-20\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-20 06:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:11:08', '2023-07-03 13:49:03'),
(569, 'Yin Yoga', 'yin-yoga', 62, NULL, '2023-06-20', '2023-06-20', '07:30 PM', '08:45 PM', '1', 'Published', '\"2023-06-20\"', 'Yin Yoga', 'event', NULL, '2023-06-20 07:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:11:53', '2023-06-07 12:11:53'),
(570, 'Deluxe Infra Red Sauna', 'deluxe-infra-red-sauna', 30, NULL, '2023-06-20', '2023-06-20', '07:30 PM', '08:30 PM', '1', 'Published', '\"2023-06-20\"', 'Deluxe Infra Red Sauna', 'event', NULL, '2023-06-20 07:30:00', '2023-06-20 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:12:32', '2023-07-03 13:49:03'),
(571, 'OSHO Active Meditations', 'osho-active-meditations', 48, NULL, '2023-06-21', '2023-06-21', '07:00 AM', '08:15 AM', '1', 'Published', '\"2023-06-21\"', 'OSHO Active Meditations', 'event', NULL, '2023-06-21 07:00:00', '2023-06-21 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-07 12:30:45', '2023-06-07 12:30:45'),
(572, 'Remedial Massage Rebirthing Breathwork Private Session', 'remedial-massage-rebirthing-breathwork-private-session', 54, NULL, '2023-06-26', '2023-06-26', '01:30 PM', '02:30 PM', '1', 'Published', '\"2023-06-26\"', 'Remedial Massage Rebirthing Breathwork Private Session', 'event', NULL, '2023-06-26 01:30:00', '2023-06-26 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-26 08:04:20', '2023-06-26 08:04:20'),
(573, 'Vinyasa', 'vinyasa', 60, NULL, '2023-06-27', '2023-06-27', '07:30 AM', '08:30 AM', '1', 'Published', '\"2023-06-27\"', 'Vinyasa', 'event', NULL, '2023-06-27 07:30:00', '2023-06-27 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-26 08:06:48', '2023-06-26 08:06:48'),
(574, 'Hot Hatha (Bikram Style)', 'hot-hatha-bikram-style', 37, NULL, '2023-07-01', '2023-07-01', '08:00 AM', '09:00 AM', '1', 'Published', '\"2023-07-01\"', 'Hot Hatha (Bikram Style)', 'event', NULL, '2023-07-01 08:00:00', '2023-07-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-26 08:23:04', '2023-07-03 13:48:29'),
(575, 'Hot Strong Yoga - Live Stream', 'hot-strong-yoga-live-stream', 74, NULL, '2023-07-01', '2023-07-01', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-07-01\"', 'Hot Strong Yoga - Live Stream', 'event', NULL, '2023-07-01 09:30:00', '2023-07-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-26 15:57:16', '2023-07-03 11:05:07'),
(576, 'Hot Strong Yoga', 'hot-strong-yoga', 72, NULL, '2023-07-01', '2023-07-01', '09:30 AM', '10:45 AM', '1', 'Published', '\"2023-07-01\"', 'Hot Strong Yoga', 'event', NULL, '2023-07-01 09:30:00', '2023-07-01 00:00:00', NULL, NULL, NULL, NULL, 'single', NULL, '2023-06-26 15:59:39', '2023-07-03 11:07:25'),
(577, 'Kundalini Tantra Yoga', 'kundalini-tantra-yoga', 78, NULL, '2023-06-28', '2023-06-22', '11:00 AM', NULL, '3', 'Published', '[]', 'Kundalini Tantra Yoga', 'recurring', NULL, '2023-06-28 11:00:00', '2023-06-22 09:00:00', '2023-06-28 11:00:00', '2023-06-22 09:00:00', '[\"1\",\"4\",\"5\",\"6\"]', '\"monday,thursday,friday,saturday\"', 'recurring', 78634, '2023-06-27 10:43:25', '2023-08-23 13:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `adminsubscriptions`
--

CREATE TABLE `adminsubscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `interval` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminsubscriptions`
--

INSERT INTO `adminsubscriptions` (`id`, `title`, `slug`, `description`, `price`, `interval`, `created_at`, `updated_at`) VALUES
(1, 'Silver Introduction 59', 'silver-introduction-59', '<h3 class=\"preFlex flexIn\">Contribution for 1 month</h3>\r\n<p class=\"preFlex flexIn\">CONTRIBUTION ONCE-OFF FEE</p>\r\n<p class=\"preFlex flexIn\">UNLIMITED STUDIO CLASSES</p>\r\n<p class=\"preFlex flexIn\">20% OFF WELLNESS CENTRE</p>', 0, 'Free', '2023-01-06 03:06:29', '2023-07-03 08:59:25'),
(2, 'Crown  Introduction 159', 'crown-introduction-159', '<h3 class=\"\">Contribution for 1 month</h3>\r\n<p class=\"preFlex flexIn\">ONE MTH INTRO MEMBERSHIP</p>\r\n<p class=\"preFlex flexIn\">UNLIMITED YOGA, REBIRTHING BREATHWORK, AERIAL YOGA, SOUND MEDITATION, ICE BATH,</p>\r\n<p class=\"preFlex flexIn\">1X INFRA RED SAUNA A WEEK</p>\r\n<p class=\"preFlex flexIn\">CONTRIBUTION ONCE-OFF PAYMENT</p>\r\n<p class=\"preFlex flexIn\">20% OFF WELLNESS CENTRE</p>', 0, 'Free', '2023-01-06 03:07:06', '2023-08-24 14:02:20'),
(3, 'GOLD MEMBERSHIP', 'gold-membership', '<h3 class=\"\">30 Contribution per week</h3>\r\n<p class=\"preFlex flexIn\">CONTRIBUTION GOLD MEMBERSHIP (PMA)</p>\r\n<p class=\"preFlex flexIn\">MINIMUM 2 MONTHS UNLIMITED YOGA CLASSES</p>\r\n<p class=\"preFlex flexIn\">20% OFF WELLNESS PROGRAM</p>', 0, 'Free', '2023-01-06 03:07:20', '2023-07-03 09:02:27'),
(6, 'Single Visit   30', 'single-visit-30', '<p class=\"preFlex flexIn\">SINGLE VISIT MEMBERSHIP</p>\r\n<p class=\"preFlex flexIn\">ONCE OFF CONTRINUTION COMMENCES FROM DATE OF FIRST BOOKING</p>', 0, 'Free', '2023-01-07 13:29:11', '2023-07-03 09:03:37'),
(7, '👑  Crown Membership', 'crown-membership', '<h3 class=\"\">40 Contribution per week</h3>\r\n<p class=\"preFlex flexIn\">MINIMUM 2 MONTHS</p>\r\n<p class=\"preFlex flexIn\">UNLIMITED YOGA, REIKI CLASSES REBIRTHING BREATHWORK ,AERIAL YOGA,SOUND BATHS,SHAMANIC ENERGY HEALING CLASSES , 1x INFRA-RED SAUNAS PER WEEK</p>\r\n<p class=\"preFlex flexIn\" data-rte-preserve-empty=\"true\">&nbsp;</p>\r\n<p class=\"preFlex flexIn\">WELLNESS PROGRAM 50% OFF - massage, chakra bed, one on one yoga, rebirthing breathwork</p>', 0, 'Free', '2023-07-03 09:04:49', '2023-07-03 09:10:01'),
(8, 'CONCESSION YOGI MEMBERSHIP', 'concession-yogi-membership', '<h3 class=\"preFlex flexIn\">Contribution</h3>\r\n<h3 class=\"\">25 per week</h3>\r\n<p class=\"preFlex flexIn\">MINIMUM 2 MONTHS</p>\r\n<p class=\"preFlex flexIn\">UNLIMITED YOGA CLASSES</p>\r\n<p class=\"preFlex flexIn\">WELLNESS PROGRAM 20% OFF</p>', 0, 'Free', '2023-07-03 09:05:10', '2023-07-03 09:05:10'),
(9, 'LIVE STREAM AND VIDEO ON DEMAND', 'live-stream-and-video-on-demand', '<h3 class=\"\">Conttribution 10 per week</h3>\r\n<p class=\"preFlex flexIn\" data-rte-preserve-empty=\"true\">&nbsp;</p>\r\n<p class=\"preFlex flexIn\">LIVE STREAM AND VIDEO ON DEMAND</p>\r\n<p class=\"preFlex flexIn\">CHOOSE ANY CLASS</p>', 0, 'Free', '2023-07-03 09:05:53', '2023-07-03 09:05:53'),
(10, '10 VISIT PASS', '10-visit-pass', '<h3 class=\"\">Contribution 200</h3>\r\n<p class=\"preFlex flexIn\">IO VISIT PASS CONTRIBUTION EXPIRES IN 12 MTHS</p>', 0, 'Free', '2023-07-03 09:06:24', '2023-07-03 09:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `admintrainers`
--

CREATE TABLE `admintrainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bio` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `status` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintrainers`
--

INSERT INTO `admintrainers` (`id`, `trainer_name`, `slug`, `email`, `phone`, `bio`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'John', 'john', 'John@summer.com', '1234567800', '<p>dfs</p>', 'sample.png', '1', '2023-01-09 00:35:18', '2023-01-09 00:35:18'),
(25, 'min', 'min', 'min@summer.com', '2343242', '<p>ddsffs</p>', '1679410813.png', '1', '2023-03-21 09:21:24', '2023-03-21 09:30:28'),
(26, 'Gindy mary', 'gindy-mary', 'gin@summer.com', '1654156', '<p>asd</p>', '1679411557.png', '1', '2023-03-21 09:42:54', '2023-03-21 10:31:07'),
(30, 'new trainer', 'new-trainer', 'newtrainer@summer.com', '12121312', '<p>dasd</p>', '1679416316.png', '1', '2023-03-21 11:01:31', '2023-03-21 11:02:00'),
(31, 'Mary', 'mary', 'mary@trainer.com', '5465465', '<p>mary@trainer.com</p>', '1681287373.png', '1', '2023-04-12 02:46:48', '2023-04-12 02:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `admintrainings`
--

CREATE TABLE `admintrainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(251) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admintrainings`
--

INSERT INTO `admintrainings` (`id`, `title`, `slug`, `image`, `description`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yoga Teacher Training 2023', 'yoga-teacher-training-2023', '1680595602.png', '<p>Bookings are open for our next accredited training in October. Our course is fully supported online and includes lifetime membership in our friendly and supportive extended Rebirthing Breathwork community. We are honoured to have Jahn Hooks, internationally renowned Rebirth Practitioner as one of our guest lecturers, we are very excited for him to share some of his teachings with us all. Come and learn the original Leonard Orr linage of consciousness connected breathing.</p>\r\n<p>This Course is for anyone who would like to learn in depth knowledge Rebirthing-Breathwork, regardless of if it is for your own healing and practice or to share it with others. No prior breath work experience necessary as we cover all aspects of the practice in our training.Rebirthing Breathwork aka Conscious Connected Breathing, is the ability to breathe Energy as well as air. It is the art of learning to breathe from the Breath Itself.</p>\r\n<p>Rebirthing is perhaps the most valuable self-healing ability that humans can learn. We can not have disease and relaxation in the same space at the same time. Relaxation is the ultimate healer. Every breath induces relaxation. Therefore, breathing is the basic healer. Conscious Connected Breathing is the most natural healing ability of all. This ability involves merging the inhale with the exhale in a gentle relaxed rhythm in an intuitive way that floods the body with Divine Energy.Rebirthing also helps us to unravel the birth-death cycle and to realign ourselves with our divine and eternal expression of pure life. Rebirthing also helps us to release trauma which we store in the physical body and heal the outdated beliefs and conditioning that we created at birth or very early in life that continue to play out in our lives as patterned behaviour.Rebirthing is the most non invasive way to heal ourselves physically, emotionally, spiritually and mentally.</p>\r\n<p>When we can consciously connect to our breath we are consciously connecting to life and we can help remind others that they too can heal with their own breath too which in turn gives them more health, happiness, success, connection and peace of mind. Watching Divine Energy move in our own body and mind is very magical, mystical, and miraculous. I never cease to be amazed by this work because it is the essence of Life Itself. This course offers people the opportunity to learn Rebirthing &ndash; Conscious connected Breathing at a very high quality standard, by attending all the lectures, regular community classes, private one on one sessions during the certified practitioner course. Message for information pack and course schedule.&nbsp;</p>', '200', '1', '2023-04-03 22:48:05', '2023-04-06 20:32:39'),
(3, 'Yin Yoga Training   2023  Mornington Peninsula', 'yin-yoga-training-2023-mornington-peninsula', '1680595735.png', '<p>Please join Summer Healing PMA for a 3-day, 50 hour Yin Yoga Teacher Training certified by Yoga Alliance, with Teacher Trainer Mickey Space. Yin Yoga Training course will be held in Mornington Peninsula between Friday 3 to Monday 6.</p>\r\n<p>This 50-hour detailed programme has been created for certified and aspiring yoga teachers, as well as dedicated yoga students who simply wish to delve more into the world of yin yoga for their own practice.</p>\r\n<p>For more information, please enter your details to download an information pack on the course. A Summer Healer will be in touch to discuss the course with you, and to help with any questions you may have.</p>', '500', '1', '2023-04-04 02:33:55', '2023-04-08 00:12:25'),
(4, 'Rebirthing Breathwork Accredited Training Course 2023', 'rebirthing-breathwork-accredited-training-course-2023', '1680596351.png', '<p>Rebirthing Breathwork Accredited Training Course 2023</p>', '0', '1', '2023-04-04 02:49:18', '2023-04-04 02:49:18'),
(5, 'The Detox Retreat', 'the-detox-retreat', '1680596718.png', '<p style=\"white-space: pre-wrap;\">The Detox Retreat</p>', '0', '1', '2023-04-04 02:55:22', '2023-04-04 02:55:22'),
(6, 'Detox Immersion Workshop', 'detox-immersion-workshop', '1680596870.png', '<p>&nbsp;Detox Immersion Workshop</p>', '0', '1', '2023-04-04 02:56:22', '2023-04-04 02:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `admintransactions`
--

CREATE TABLE `admintransactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminwellnesses`
--

CREATE TABLE `adminwellnesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminwellnesses`
--

INSERT INTO `adminwellnesses` (`id`, `title`, `description`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ice bath', '<p>When you finish working out, your body pumps oxygen and detoxes. Specifically, it flushes out compounds such as lactic acid, which causes fatigue and soreness. Lactic acid is created when glucose is broken down in the body. The more intense the exercise, the more lactic acid is created. Ice baths cause your blood vessels to tighten and thus help the body drain lactic acid. They also reduce swelling. Once you&rsquo;ve left the bath, the blood vessels widen again and let through a stream of &ldquo;fresh&rdquo; blood. This blood is packed with oxygen, and so it can quickly set to work reinvigorating the muscles.</p>', '1679453497.png', 'Published', '2023-03-21 21:21:37', '2023-03-21 21:21:37'),
(2, 'Infrared sauna', '<p>An infrared sauna is a type of sauna that uses light to create heat. This type of sauna is sometimes called a far-infrared sauna &mdash; \"far\" describes where the infrared waves fall on the light spectrum. A traditional sauna uses heat to warm the air, which in turn warms your body. An infrared sauna heats your body directly without warming the air around you.The appeal of saunas, in general is that they cause reactions similar to those elicited by moderate exercise, such as vigorous sweating and in</p>', '1679453524.png', 'Published', '2023-03-21 21:22:04', '2023-03-21 21:22:04'),
(3, 'Remedial Massage', '<p>Remedial massage is a complementary therapy that aims to treat muscles that are damaged, knotted, tense or immobile. ... Remedial massage is used to locate and repair damaged areas of the body and speed up the body\'s own healing processes.</p>', '1679453557.png', 'Published', '2023-03-21 21:22:37', '2023-03-21 21:22:37'),
(4, 'Kahuna Massage', '<p>Kahuna massage is an ancient therapeutic massage technique based on the teachings and practices of the Hawaiian Kahunas. In the language of native Hawaiians, the word \"kahuna\" is derived from \"huna\" which means \"secret knowledge.\" In other words, a Kahuna was a master practitioner of the huna arts. The massage (\"lomi lomi\") was traditionally practiced in the Hawaiian Islands as one of the Kahuna healing arts and for relaxation. Kahuna massage in the West is also said</p>', '1679453572.png', 'Published', '2023-03-21 21:22:52', '2023-03-21 21:22:52'),
(5, 'Relaxation Massage', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1679453592.png', 'Published', '2023-03-21 21:23:12', '2023-03-21 21:23:12'),
(6, 'Rebirthing Breathwork Private Session', '<p>Conscious Energy Breathing is the most natural healing ability of all.Most Rebirthing Breathwork sessions are physical, emotional, and spiritual.We can relax out of any kind of intense emotion or physical sensationwhen we have this simple powerful skill of Conscious Breathing.</p>', '1679453613.png', 'Published', '2023-03-21 21:23:33', '2023-03-21 21:23:33'),
(7, 'Personal Training', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1679453636.png', 'Published', '2023-03-21 21:23:56', '2023-03-21 21:23:56'),
(8, 'Private Yoga Session', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>', '1679453656.png', 'Published', '2023-03-21 21:24:16', '2023-03-21 21:24:16'),
(9, 'Kinesiology', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>', '1679453687.png', 'Published', '2023-03-21 21:24:47', '2023-03-21 21:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `bookedevents`
--

CREATE TABLE `bookedevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userphone` int(100) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `starttime` varchar(255) DEFAULT NULL,
  `endtime` varchar(255) DEFAULT NULL,
  `tickets` int(13) DEFAULT NULL,
  `attendees` varchar(251) DEFAULT NULL,
  `customer_id` varchar(251) DEFAULT NULL,
  `card` varchar(251) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookedevents`
--

INSERT INTO `bookedevents` (`id`, `title`, `price`, `user_id`, `username`, `userphone`, `useremail`, `venue`, `startdate`, `enddate`, `starttime`, `endtime`, `tickets`, `attendees`, `customer_id`, `card`, `created_at`, `updated_at`) VALUES
(4, 'Shamanic healing journey with pavla', 500, 30, 'User2023', 12345678, 'User2023@mail.com', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 2, 'pawla, mary', 'cus_Ng1Qweq1G0I7K7', 'card_1MufNUSB3wDJDTy6TIKnRdYO', '2023-04-08 11:47:03', '2023-04-08 11:47:03'),
(5, 'Event 2', 111, 30, 'User2023', 12345678, 'User2023@mail.com', 'Victoria', '2023-04-07', '2023-04-07', '11:00 AM', '17:00 PM', 2, 'michael, george', 'cus_NgEmjBRigGm4G0', 'card_1MusJDSB3wDJDTy6PbIAq7zg', '2023-04-09 01:35:30', '2023-04-09 01:35:30'),
(8, 'Shamanic healing journey with pavla', 2000, 51, 'test', 900000000, 'user1@summer.com', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 3, 'maneul', 'cus_NgFT6hKTebhDRs', 'card_1MusyXSB3wDJDTy6wu1ZbL8p', '2023-04-09 02:18:12', '2023-04-09 02:18:12'),
(9, 'Event 3', 0, 51, 'test', 900000000, 'user1@summer.com', 'Event2', '2023-04-08', '2023-04-09', '16:00 PM', '20:00 PM', 3, 'min, sin, tin', NULL, NULL, '2023-04-09 02:21:08', '2023-04-09 02:21:08'),
(10, 'Event 3', 0, 51, 'test', 900000000, 'user1@summer.com', 'Event2', '2023-04-08', '2023-04-09', '16:00 PM', '20:00 PM', 3, 'min, sin, tin', NULL, NULL, '2023-04-09 02:28:57', '2023-04-09 02:28:57'),
(11, 'Event 3', 0, 51, 'test', 900000000, 'user1@summer.com', 'Event2', '2023-04-08', '2023-04-09', '16:00 PM', '20:00 PM', 3, 'test,min, sin, tin', NULL, NULL, '2023-04-09 02:37:22', '2023-04-09 02:37:22'),
(12, 'Event 3', 0, 51, 'test', 900000000, 'user1@summer.com', 'Event2', '2023-04-08', '2023-04-09', '16:00 PM', '20:00 PM', 3, 'test,min,sin,tin', NULL, NULL, '2023-04-09 02:41:23', '2023-04-09 02:41:23'),
(13, 'Shamanic healing journey with pavla', 1500, 51, 'test', 900000000, 'user1@summer.com', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 2, 'test,win,susy', 'cus_NgFrYKdHOJY1AB', 'card_1MutLjSB3wDJDTy6Ncsx1Hh6', '2023-04-09 02:42:11', '2023-04-09 02:42:11'),
(14, 'Shamanic healing journey with pavla', 1500, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 2, 'krishna,Susi,Susan', 'cus_NgN2dsydKap6qy', 'card_1Mv0IgSB3wDJDTy6rYsbaxo1', '2023-04-09 10:07:29', '2023-04-09 10:07:29'),
(15, 'Shamanic healing journey with pavla', 1500, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 2, 'krishna,Susi,Susan', 'cus_NgN3RmaUVHG6HS', 'card_1Mv0JlSB3wDJDTy6jTqt0xb7', '2023-04-09 10:08:36', '2023-04-09 10:08:36'),
(16, 'Shamanic healing journey with pavla', 1500, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 2, 'krishna,Susan,Susi', 'cus_NgN586tvJ0t0mg', 'card_1Mv0LFSB3wDJDTy6wMkdCLP9', '2023-04-09 10:10:08', '2023-04-09 10:10:08'),
(17, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,susa', 'cus_NgN8nAcSTucV9B', 'card_1Mv0OcSB3wDJDTy6XaEep440', '2023-04-09 10:13:39', '2023-04-09 10:13:39'),
(18, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,susa', 'cus_NgNBOuCbbdWyrb', 'card_1Mv0QnSB3wDJDTy6TTW3Cliu', '2023-04-09 10:15:52', '2023-04-09 10:15:52'),
(19, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,zx', 'cus_NgNBL5BIVkDZqz', 'card_1Mv0RESB3wDJDTy6Ge9WYMPH', '2023-04-09 10:16:20', '2023-04-09 10:16:20'),
(20, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,zx', 'cus_NgNCMrqteVZjOr', 'card_1Mv0SFSB3wDJDTy6xv1fnZep', '2023-04-09 10:17:22', '2023-04-09 10:17:22'),
(21, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,ada', 'cus_NgNDAbvJkVcCad', 'card_1Mv0SsSB3wDJDTy6XA7H8IRG', '2023-04-09 10:18:01', '2023-04-09 10:18:01'),
(22, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,susa', 'cus_NgNFU4hArNXZBf', 'card_1Mv0UzSB3wDJDTy6BIxItmUu', '2023-04-09 10:20:12', '2023-04-09 10:20:12'),
(23, 'Shamanic healing journey with pavla', 1000, 35, 'krishna', 65456566, 'krishnadas@getupsolutions.com.au', 'test venue', '2023-04-07', '2023-04-07', '10:00 AM', '14:00 PM', 1, 'krishna,susa', 'cus_NgNGHJsVh48EVy', 'card_1Mv0WMSB3wDJDTy6dw1nqvLg', '2023-04-09 10:21:38', '2023-04-09 10:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(251) DEFAULT NULL,
  `subject` varchar(251) DEFAULT NULL,
  `message` longtext NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `source`, `created_at`, `updated_at`) VALUES
(29, 'Manu', 'manuel123@mail.com', '9072145363', 'test subject', 'This is sample message', 'Contact page', '2023-06-08 21:53:58', '2023-06-08 21:53:58'),
(82, 'Sajeev Muttathu Sali', 'sajeev@getupsolutions.com.au', '0424704506', 'sajeev', 'hkhjhhk', 'Contact page', '2023-06-21 10:24:56', '2023-06-21 10:24:56'),
(83, 'sss', 'ss@mail.com', '545646', 'test', 'asasdsa', 'Contact page', '2023-06-21 22:02:26', '2023-06-21 22:02:26'),
(84, 'www', 'www@mail.com', '65644646', 'fsdds', 'dssfdsfdskkfdsdrer', 'Contact page', '2023-06-21 22:09:18', '2023-06-21 22:09:18'),
(85, 'ddd', 'dd@mail.com', '45466', 'dsds', 'vdsfds', 'Contact page', '2023-06-21 22:18:19', '2023-06-21 22:18:19');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_03_140406_create_pages_table', 2),
(6, '2023_01_03_140406_create_adminpages_table', 3),
(7, '2023_01_03_140409_create_adminpages_table', 4),
(8, '2023_01_03_140419_create_adminpages_table', 5),
(9, '2023_01_03_141419_create_adminpages_table', 6),
(10, '2023_01_03_142419_create_adminpages_table', 7),
(11, '2023_01_03_143419_create_adminpages_table', 8),
(12, '2023_01_04_143125_create_adminsubscriptions_table', 9),
(13, '2023_01_04_153125_create_adminsubscriptions_table', 10),
(14, '2023_01_05_032434_create_admingeneralsettings_table', 11),
(15, '2023_01_05_032955_create_adminpaymentsettings_table', 11),
(16, '2023_01_05_034619_create_admincontactsettings_table', 11),
(17, '2023_01_05_032956_create_adminpaymentsettings_table', 12),
(18, '2023_01_05_032957_create_adminpaymentsettings_table', 13),
(19, '2023_01_05_034629_create_admincontactsettings_table', 14),
(20, '2023_01_05_140701_create_admincourses_table', 15),
(21, '2023_01_04_153127_create_adminsubscriptions_table', 16),
(22, '2023_01_05_140702_create_admincourses_table', 16),
(23, '2023_01_06_082437_create_course_subscription_table', 17),
(24, '2023_01_06_082447_create_admincourse_adminsubscription_table', 18),
(25, '2023_01_06_082457_create_admincourse_adminsubscription_table', 19),
(26, '2023_01_06_082459_create_admincourse_adminsubscription_table', 20),
(27, '2023_01_05_140703_create_admincourses_table', 21),
(28, '2023_01_06_082460_create_admincourse_adminsubscription_table', 22),
(29, '2023_01_07_192206_create_admincoursecategories_table', 22),
(30, '2023_01_06_082461_create_admincourse_adminsubscription_table', 23),
(31, '2023_01_07_192206_create_admincoursecats_table', 24),
(32, '2023_01_07_192405_create_admincourse_admincoursecat_table', 25),
(33, '2023_01_05_140704_create_admincourses_table', 26),
(34, '2023_01_09_021929_create_admintrainers_table', 27),
(35, '2023_01_09_0219211_create_admintrainers_table', 28),
(36, '2023_01_09_0219212_create_admintrainers_table', 29),
(37, '2023_01_09_055137_create_admincourse_admintrainer_table', 30),
(38, '2023_01_05_140714_create_admincourses_table', 31),
(39, '2023_01_12_011016_create_contacts_table', 32),
(40, '2023_01_27_032954_create_orders_table', 33),
(41, '2023_01_27_042954_create_orders_table', 34),
(42, '2023_02_03_071311_create_adminreports_table', 35),
(43, '2023_02_03_072239_create_admintransactions_table', 35),
(44, '2023_02_04_164541_create_usersubscriptions_table', 35),
(45, '2023_01_07_192206_create_adminondemandcats_table', 36),
(46, '2023_02_03_042609_create_adminondemands_table', 37),
(47, '2023_01_09_055139_create_order_user_table', 38),
(48, '2023_01_09_055139_create_admincourse_order_table', 39),
(49, '2023_01_09_055240_create_admincourse_order_table', 40),
(50, '2023_03_22_005648_create_adminwellnesses_table', 41),
(51, '2023_03_22_005649_create_adminwellnesses_table', 42),
(52, '2023_04_04_030839_create_admintrainings_table', 43),
(53, '2023_04_07_004204_create_adminevents_table', 44),
(54, '2023_04_08_095002_create_bookedevents_table', 45),
(55, '2023_04_11_033502_create_roles_table', 46),
(56, '2023_01_09_055143_create_role_user_table', 47),
(57, '2023_04_11_033502_create_permissions_table', 48),
(58, '2023_01_09_055143_create_permission_user_table', 49),
(59, '2023_04_17_080812_create_adminschedules_table', 50),
(60, '2023_04_17_084640_create_adminschedulecats_table', 51),
(61, '2023_04_25_010952_create_schedulebookings_table', 52),
(62, '2023_05_05_082461_create_admincourse_adminschedule_table', 53);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course` varchar(255) NOT NULL,
  `courseid` varchar(250) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `userphone` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `type` varchar(250) NOT NULL,
  `training_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `course`, `courseid`, `total`, `quantity`, `address`, `city`, `state`, `country`, `zip`, `userphone`, `useremail`, `username`, `type`, `training_id`, `created_at`, `updated_at`) VALUES
(1, 'On demand 1', '3', 310, 1, 'test address, australia', 'Brunswick', 'Victoria', 'Australia', '5225', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 20:04:30', '2023-03-16 20:04:30'),
(2, 'Course2', '2', 210, 1, 'test address, australia', 'Brunswick', 'ddg', 'Australia', '3332', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 20:24:54', '2023-03-16 20:24:54'),
(3, 'On Demand 3,Course 3', '6,5', 1120, 2, 'test address, australia', 'Brunswick', 'Victoria', 'Australia', '3332', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 20:28:01', '2023-03-16 20:28:01'),
(4, 'Course 3,On Demand 3', '5,6', 1630, 2, 'test address, australia', 'Brunswick', 'Victoria', 'Australia', '5225', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 21:45:17', '2023-03-16 21:45:17'),
(5, 'Course 3,On Demand 3', '5,6', 1630, 2, 'test address, australia', 'Brunswick', 'Victoria', 'Australia', '5225', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 21:45:36', '2023-03-16 21:45:36'),
(6, 'Course 3', '5', 510, 1, 'test address, australia', 'yyi', 'yuiu', 'Australia', '4565', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 21:55:31', '2023-03-16 21:55:31'),
(7, 'Course 3', '5', 510, 1, 'test address, australia', 'yyi', 'yuiu', 'Australia', '4565', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 21:55:39', '2023-03-16 21:55:39'),
(8, 'Course 3', '5', 510, 1, 'test address, australia', 'yyi', 'yuiu', 'Australia', '4565', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-16 21:56:50', '2023-03-16 21:56:50'),
(9, 'course4,On Demand4', '8,10', 737, 2, 'test address, australia', 'vbv', 'ddg', 'Australia', '5656', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-17 00:08:17', '2023-03-17 00:08:17'),
(10, 'course4,On Demand4', '8,10', 737, 2, 'test address, australia', 'vbv', 'ddg', 'Australia', '5656', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-17 00:08:24', '2023-03-17 00:08:24'),
(11, 'course4,On Demand4', '8,10', 737, 2, 'test address, australia', 'vbv', 'ddg', 'Australia', '5656', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-17 00:08:34', '2023-03-17 00:08:34'),
(12, 'course4,On Demand4', '8,10', 737, 2, 'test address, australia', 'vbv', 'ddg', 'Australia', '5656', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-17 00:09:09', '2023-03-17 00:09:09'),
(13, 'Course1,On demand 2', '1,4', 520, 2, 'test address, australia', 'Brunswick', 'Victoria', 'Australia', '3332', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-17 01:12:54', '2023-03-17 01:12:54'),
(14, 'Course2', '2', 210, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '3332', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:35:52', '2023-03-20 11:35:52'),
(15, 'Course2', '2', 210, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '3332', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:35:58', '2023-03-20 11:35:58'),
(16, 'Course2', '2', 210, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '3332', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:36:12', '2023-03-20 11:36:12'),
(17, 'Course2', '2', 210, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '3332', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:36:58', '2023-03-20 11:36:58'),
(18, 'Course 3', '5', 510, 1, 'test address', 'Melbourne', 'ddg', 'Australia', '5225', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:40:41', '2023-03-20 11:40:41'),
(19, 'Course1', '1', 110, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '4565', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-20 11:42:53', '2023-03-20 11:42:53'),
(20, 'Course2', '2', 420, 1, 'dfg', 'dfg', 'Victoria', 'Australia', '5656', NULL, 'ff@mail.com', 'ff', '', NULL, '2023-03-21 19:04:54', '2023-03-21 19:04:54'),
(21, 'Course2', '2', 210, 1, 'test address', 'Brunswick', 'Victoria', 'Australia', '5656', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 01:39:50', '2023-03-23 01:39:50'),
(22, 'Course 3', '5', 510, 1, 'test address', 'jh', 'ghjgh', 'Australia', '567', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 01:44:04', '2023-03-23 01:44:04'),
(23, 'Course1', '1', 0, 1, 'test address', 'xcvcx', 'xcv', 'Australia', '123123', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 01:57:23', '2023-03-23 01:57:23'),
(24, 'Course1', '1', 0, 1, 'test address', 'fsdf', 'sdfds', 'Australia', '3245', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:00:12', '2023-03-23 02:00:12'),
(25, 'Course 3', '5', 510, 1, 'test address', 'gdfgdf', 'dfgf', 'Australia', '676787', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:06:38', '2023-03-23 02:06:38'),
(26, 'Course2', '2', 210, 1, 'test address', 'jhjhhg', 'hgjghj', 'Australia', '45645', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:15:16', '2023-03-23 02:15:16'),
(27, 'Course2', '2', 210, 1, 'test address', 'jhjhhg', 'hgjghj', 'Australia', '45645', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:15:26', '2023-03-23 02:15:26'),
(28, 'asdsaasdaqe', '15', 2223, 1, 'test address', 'dfgf', 'dfgdf', 'Australia', '6566', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:20:01', '2023-03-23 02:20:01'),
(29, 'Course2', '2', 210, 1, 'test address', 'dfg', 'dfgfd', 'Australia', '45334', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:45:49', '2023-03-23 02:45:49'),
(30, 'Course2', '2', 210, 1, 'test address', 'sddsds', 'dsfds', 'Australia', '32534', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:49:00', '2023-03-23 02:49:00'),
(31, 'course3', '7', 0, 1, 'test address', 'sdfd', 'dsfdsf', 'Australia', '6545', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 02:52:51', '2023-03-23 02:52:51'),
(32, 'course4', '8', 230, 1, 'test address', 'gghgfhg', 'hjkjh', 'Australia', '6666', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 03:00:13', '2023-03-23 03:00:13'),
(33, 'Course 3', '5', 510, 1, 'test address', 'asdasd', 'asdsa', 'Australia', '5456', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 03:03:50', '2023-03-23 03:03:50'),
(34, 'Course2', '2', 210, 1, 'test address', 'dfgf', 'dfg', 'Australia', '65456', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 03:07:56', '2023-03-23 03:07:56'),
(35, 'Course 3', '5', 510, 1, 'test address', 'ffhg', 'fghgfh', 'Australia', '3454', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 03:15:59', '2023-03-23 03:15:59'),
(36, 'Course2', '2', 210, 1, 'test address', 'sdfsdsdfd', 'sdfds', 'Australia', '324234', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 03:19:57', '2023-03-23 03:19:57'),
(37, 'Course 5', '12', 0, 1, 'test address', 'gyjg', 'ghjh', 'Australia', '65456', '65456566', 'krishnadas@getupsolutions.com.au', 'krishna', '', NULL, '2023-03-23 03:38:39', '2023-03-23 03:38:39'),
(38, 'Course 3', '5', 510, 1, 'test address', 'ffgfgf', 'ghf', 'Australia', '667', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 04:02:08', '2023-03-23 04:02:08'),
(39, 'Course2', '2', 0, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', '', NULL, '2023-03-23 09:29:54', '2023-03-23 09:29:54'),
(40, 'Course 3', '5', 510, 1, 'test address', 'dfsdsf', 'sdfd', 'Australia', '34432', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 09:48:51', '2023-03-23 09:48:51'),
(41, 'Course 3', '5', 510, 1, 'test address', 'dfsdsf', 'sdfd', 'Australia', '34432', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-03-23 09:50:47', '2023-03-23 09:50:47'),
(42, 'Course2', '2', 210, 1, 'sdfds', 'sdfds', 'dsfds', 'Australia', '3453', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-23 11:17:05', '2023-03-23 11:17:05'),
(43, 'Course2', '2', 210, 1, 'sdfds', 'rdfgh', 'fgh', 'Australia', '4566', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-23 11:35:26', '2023-03-23 11:35:26'),
(44, 'course3', '7', 500, 1, 'sdfds', 'jgj', 'gjg', 'Australia', '56567', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-23 11:38:00', '2023-03-23 11:38:00'),
(45, 'Course 5', '12', 654, 1, 'sdfds', 'ddsd', 'dsfd', 'Australia', '5678', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-23 12:10:57', '2023-03-23 12:10:57'),
(46, 'asdsaasdaqe', '15', 2223, 1, 'sdfds', '465', 'ipiop', 'Australia', '4565', '9072145363', 'user@summer.com', 'Normal', '', NULL, '2023-03-23 12:13:30', '2023-03-23 12:13:30'),
(47, 'On Demand4', '10', 507, 1, 'dfsdf', 'sdfds', 'sdfdsf', 'Australia', '3424', NULL, 'newuser@summer.com', 'new user', '', NULL, '2023-03-23 19:07:39', '2023-03-23 19:07:39'),
(48, 'Course2', '2', 210, 1, 'dsfs', 'dsfsdf', 'dsfds', 'Australia', '324324', NULL, 'subscriber1@summer.com', 'Subscriber 1', '', NULL, '2023-03-24 10:15:38', '2023-03-24 10:15:38'),
(49, 'On Demand3', '9', 105, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', '', NULL, '2023-04-03 03:54:27', '2023-04-03 03:54:27'),
(50, 'The Detox Retreat', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 5, '2023-04-04 20:05:24', '2023-04-04 20:05:24'),
(51, 'Detox Immersion Workshop', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 6, '2023-04-05 01:19:44', '2023-04-05 01:19:44'),
(52, 'Yoga Teacher Training 2023', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 1, '2023-04-05 01:23:45', '2023-04-05 01:23:45'),
(58, 'Rebirthing Breathwork Accredited Training Course 2023', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 4, '2023-04-05 10:11:59', '2023-04-05 10:11:59'),
(59, 'Yin Yoga Training   2023  Mornington Peninsula', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 3, '2023-04-05 10:13:47', '2023-04-05 10:13:47'),
(60, 'Yin Yoga Training   2023  Mornington Peninsula', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 3, '2023-04-05 10:15:52', '2023-04-05 10:15:52'),
(61, 'Yin Yoga Training   2023  Mornington Peninsula', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '900000000', 'user1@summer.com', 'test', 'training', 3, '2023-04-05 10:17:02', '2023-04-05 10:17:02'),
(62, 'Course1', '1', 110, 1, 'test address', 'test city', 'vic', 'Australia', '5365', NULL, 'subscriber4@summer.com', 'subscriber 4', 'course', NULL, '2023-04-06 01:27:57', '2023-04-06 01:27:57'),
(63, 'Detox Immersion Workshop', NULL, 0, 1, 'null', 'null', 'null', 'Australia', 'null', '12345678', 'User2023@mail.com', 'User2023', 'training', 6, '2023-04-08 00:02:15', '2023-04-08 00:02:15'),
(64, 'Yoga Teacher Training 2023', NULL, 200, 1, 'null', 'null', 'null', 'Australia', 'null', '12345678', 'User2023@mail.com', 'User2023', 'training', 1, '2023-04-08 00:03:52', '2023-04-08 00:03:52'),
(65, 'Yin Yoga Training   2023  Mornington Peninsula', NULL, 500, 1, 'null', 'null', 'null', 'Australia', 'null', '12345678', 'User2023@mail.com', 'User2023', 'training', 3, '2023-04-08 00:13:33', '2023-04-08 00:13:33'),
(66, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:44:00', '2023-05-11 03:44:00'),
(67, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:47:02', '2023-05-11 03:47:02'),
(68, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:50:53', '2023-05-11 03:50:53'),
(69, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:52:32', '2023-05-11 03:52:32'),
(70, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:54:45', '2023-05-11 03:54:45'),
(71, 'Hot Strong Yoga', '22', 0, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-11 03:56:42', '2023-05-11 03:56:42'),
(72, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-11 03:58:14', '2023-05-11 03:58:14'),
(73, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 20:30:31', '2023-05-14 20:30:31'),
(74, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 20:30:59', '2023-05-14 20:30:59'),
(75, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 21:01:11', '2023-05-14 21:01:11'),
(76, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 21:04:39', '2023-05-14 21:04:39'),
(77, 'Hot Strong Yoga', '22', 200, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 22:05:00', '2023-05-14 22:05:00'),
(78, 'asds', '23', 333, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 22:07:23', '2023-05-14 22:07:23'),
(79, 'Hot Hatha', '21', 111, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 22:11:17', '2023-05-14 22:11:17'),
(80, 'Hot Hatha', '21', 111, 1, 'rrt', 'ertrer', 'erter', 'Australia', '4565', '12345678', 'User2023@mail.com', 'User2023', 'course', NULL, '2023-05-14 22:14:06', '2023-05-14 22:14:06'),
(81, 'Deluxe Infra Red Sauna', '30', 60, 1, 'test address', 'iopoip', 'Victoria', 'Australia', '3332', '900000000', 'user1@summer.com', 'test', 'course', NULL, '2023-05-17 14:00:49', '2023-05-17 14:00:49'),
(82, 'Vinyasa', '60', 25, 1, 'test', 'test', 'test', 'Australia', '54243', NULL, 'praicy@getupsolutions.com.au', 'ambily_test', 'course', NULL, '2023-06-26 08:10:05', '2023-06-26 08:10:05'),
(83, 'Vinyasa', '60', 25, 1, 'test', 'test', 'test', 'Australia', '54243', NULL, 'praicy@getupsolutions.com.au', 'ambily_test', 'course', NULL, '2023-06-26 08:10:08', '2023-06-26 08:10:08'),
(84, 'Ascension Meditation,Hot Strong Yoga - Live Stream', '77,74', 30, 2, 'test', 'test', 'test', 'Australia', '54243', '6565469897', 'praicy@getupsolutions.com.au', 'ambily_test', 'course', NULL, '2023-06-27 09:18:46', '2023-06-27 09:18:46'),
(85, 'Hot Hatha (Bikram Style) -LIVE,Hot Strong Yoga', '75,72', 25, 2, 'test', 'test', 'test', 'Australia', '54243', '6565469897', 'praicy@getupsolutions.com.au', 'ambily_test', 'course', NULL, '2023-06-27 13:29:40', '2023-06-27 13:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

CREATE TABLE `order_user` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`order_id`, `user_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(17, 35),
(18, 35),
(19, 35),
(20, 50),
(21, 51),
(22, 35),
(23, 35),
(24, 35),
(25, 35),
(26, 35),
(27, 35),
(28, 35),
(29, 35),
(30, 35),
(31, 35),
(32, 35),
(33, 51),
(34, 51),
(35, 51),
(36, 51),
(37, 35),
(38, 51),
(39, 30),
(41, 51),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 8),
(48, 6),
(49, 51),
(62, 54),
(66, 51),
(67, 51),
(68, 51),
(69, 51),
(70, 51),
(71, 51),
(72, 30),
(73, 30),
(74, 30),
(75, 30),
(76, 30),
(77, 30),
(78, 30),
(79, 30),
(80, 30),
(81, 51),
(82, 89),
(83, 89),
(84, 89),
(85, 89);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kode4mee@gmail.com', '$2y$10$OclF2q/3JfW.asC254BVhOiJSz68TEZMcMGCshei5h8A2u6b7iFe2', '2023-04-27 01:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `info` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `info`, `created_at`, `updated_at`) VALUES
(16, 'pages.index', 'pagesindex', 'Can view pages listing', '2023-04-10 23:43:56', '2023-04-10 23:59:03'),
(18, 'pages.edit', 'pagesedit', 'Can edit pages', '2023-04-10 23:44:08', '2023-04-10 23:59:32'),
(20, 'courses.index', 'coursesindex', 'Can view courses listing', '2023-04-10 23:45:45', '2023-04-11 00:00:15'),
(21, 'courses.create', 'coursescreate', 'Can create courses', '2023-04-10 23:45:53', '2023-04-11 00:00:27'),
(22, 'courses.edit', 'coursesedit', 'Can edit courses', '2023-04-10 23:45:59', '2023-04-11 00:00:38'),
(23, 'courses.delete', 'coursesdelete', 'Can delete courses', '2023-04-10 23:46:04', '2023-04-11 00:03:11'),
(24, 'trainings.index', 'trainingsindex', 'Can view trainings listing', '2023-04-10 23:46:44', '2023-04-11 00:03:21'),
(25, 'trainings.create', 'trainingscreate', 'Can create trainings', '2023-04-10 23:47:28', '2023-04-11 00:03:32'),
(26, 'trainings.edit', 'trainingsedit', 'Can edit trainings', '2023-04-10 23:47:33', '2023-04-11 00:04:04'),
(27, 'trainings.delete', 'trainingsdelete', 'Can delete trainings', '2023-04-10 23:47:40', '2023-04-11 00:04:13'),
(28, 'events.index', 'eventsindex', 'Can view events listing', '2023-04-10 23:47:47', '2023-04-11 00:04:39'),
(29, 'events.create', 'eventscreate', 'Can events create', '2023-04-10 23:47:51', '2023-04-11 00:04:25'),
(30, 'events.edit', 'eventsedit', 'Can edit events', '2023-04-10 23:48:00', '2023-04-11 00:03:02'),
(31, 'events.delete', 'eventsdelete', 'Can delete events', '2023-04-10 23:48:05', '2023-04-11 00:02:53'),
(32, 'users.index', 'usersindex', 'Can view users listing', '2023-04-10 23:51:14', '2023-04-11 00:02:45'),
(33, 'users.view', 'usersview', 'Can view users', '2023-04-10 23:51:24', '2023-04-11 00:02:34'),
(34, 'users.edit', 'usersedit', 'Can edit users', '2023-04-10 23:51:31', '2023-04-11 00:02:24'),
(35, 'users.delete', 'usersdelete', 'Can delete users', '2023-04-10 23:51:36', '2023-04-11 00:02:13'),
(36, 'orders.index', 'ordersindex', 'Can view orders listing', '2023-04-10 23:52:26', '2023-04-11 00:02:03'),
(37, 'trainers.index', 'trainersindex', 'Can view trainers listing', '2023-04-10 23:53:06', '2023-04-11 00:01:49'),
(38, 'trainers.create', 'trainerscreate', 'Can create trainers', '2023-04-10 23:53:25', '2023-04-11 00:01:15'),
(39, 'trainers.edit', 'trainersedit', 'Can edit trainers', '2023-04-10 23:53:40', '2023-04-11 00:01:01'),
(40, 'trainers.delete', 'trainersdelete', 'Can delete trainers', '2023-04-10 23:53:46', '2023-04-11 00:00:53'),
(41, 'subscriptions.index', 'subscriptionsindex', 'Can view subscriptions listing', '2023-04-11 00:09:27', '2023-04-11 00:09:27'),
(42, 'subscriptions.create', 'subscriptionscreate', 'Can create subscriptions', '2023-04-11 00:09:59', '2023-04-11 00:09:59'),
(43, 'subscriptions.edit', 'subscriptionsedit', 'Can edit subscriptions', '2023-04-11 00:10:24', '2023-04-11 00:10:24'),
(44, 'subscriptions.delete', 'subscriptionsdelete', 'Can delete subscriptions', '2023-04-11 00:10:39', '2023-04-11 00:10:39'),
(45, 'subscribers.index', 'subscribersindex', 'Can view subscribers listing', '2023-04-11 00:11:11', '2023-04-11 00:11:11'),
(46, 'subscribers.create', 'subscriberscreate', 'Can create subscribers', '2023-04-11 00:11:35', '2023-04-11 00:11:35'),
(47, 'subscribers.edit', 'subscribersedit', 'Can edit subscribers', '2023-04-11 00:11:53', '2023-04-11 00:11:53'),
(48, 'subscribers.delete', 'subscribersdelete', 'Can delete subscribers', '2023-04-11 00:12:18', '2023-04-11 00:12:18'),
(49, 'reports.index', 'reportsindex', 'Can view reports listing', '2023-04-11 00:18:42', '2023-04-11 00:18:42'),
(50, 'wellness.index', 'wellnessindex', 'Can view wellness listing', '2023-04-11 00:19:06', '2023-04-11 00:19:06'),
(51, 'wellness.create', 'wellnesscreate', 'Can create wellness', '2023-04-11 00:19:19', '2023-04-11 00:19:19'),
(52, 'wellness.edit', 'wellnessedit', 'Can edit wellness', '2023-04-11 00:19:31', '2023-04-11 00:19:31'),
(53, 'wellness.delete', 'wellnessdelete', 'Can delete wellness', '2023-04-11 00:19:51', '2023-04-11 00:19:51'),
(54, 'wellness.show', 'wellnessshow', 'Can show wellness details', '2023-04-11 00:20:15', '2023-04-11 00:20:15'),
(55, 'leads.index', 'leadsindex', 'Can view leads listing', '2023-04-11 00:20:46', '2023-04-11 00:20:46'),
(56, 'courses.categories', 'coursescategories', 'Can manage course categories', '2023-04-11 20:05:53', '2023-04-11 20:05:53'),
(57, 'events.bookedevents', 'eventsbookedevents', 'Can view booked events', '2023-04-11 21:15:27', '2023-04-11 21:15:27'),
(58, 'events.bookedevents.view', 'eventsbookedeventsview', 'Can view booked event item', '2023-04-11 21:17:39', '2023-04-11 21:17:39'),
(59, 'events.bookedevents.delete', 'eventsbookedeventsdelete', 'Can delete event booked item', '2023-04-11 21:18:05', '2023-04-11 21:18:05'),
(60, 'users.create', 'userscreate', 'Can create user', '2023-04-11 21:48:10', '2023-04-11 21:48:10'),
(61, 'leads.delete', 'leadsdelete', 'Can delete leads', '2023-04-11 22:42:37', '2023-04-11 22:42:37'),
(62, 'schedule.index', 'scheduleindex', 'Can view the schedule list', '2023-05-03 19:30:38', '2023-05-03 19:30:38'),
(63, 'schedule.newschedule', 'schedulenewschedule', 'Can access new schedule page', '2023-05-03 19:31:57', '2023-05-03 19:31:57'),
(64, 'schedule.create', 'schedulecreate', 'Can create schedule', '2023-05-03 19:32:13', '2023-05-03 19:32:13'),
(65, 'schedule.edit', 'scheduleedit', 'Can edit schedule', '2023-05-03 19:32:31', '2023-05-03 19:32:31'),
(66, 'schedule.delete', 'scheduledelete', 'Can delete schedule', '2023-05-03 19:32:48', '2023-05-03 19:32:48'),
(67, 'schedule.view', 'scheduleview', 'Can view schedule item', '2023-05-03 19:33:26', '2023-05-03 19:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`) VALUES
(16, 61),
(20, 61),
(22, 64),
(56, 64),
(21, 64),
(23, 64),
(30, 64),
(31, 64),
(57, 64),
(59, 64),
(58, 64),
(26, 64),
(27, 64),
(48, 64),
(35, 64),
(33, 64),
(46, 64),
(34, 64),
(47, 64),
(42, 64),
(43, 64),
(44, 64),
(52, 64),
(53, 64),
(38, 64),
(39, 64),
(40, 64),
(18, 64),
(55, 64),
(61, 64),
(54, 64),
(56, 66),
(21, 66),
(23, 66),
(22, 66),
(20, 66),
(57, 66),
(59, 66),
(58, 66),
(29, 66),
(31, 66),
(30, 66),
(28, 66),
(61, 66),
(55, 66),
(36, 66),
(18, 66),
(16, 66),
(49, 66),
(46, 66),
(48, 66),
(47, 66),
(45, 66),
(42, 66),
(44, 66),
(43, 66),
(41, 66),
(38, 66),
(40, 66),
(39, 66),
(37, 66),
(25, 66),
(27, 66),
(26, 66),
(24, 66),
(60, 66),
(35, 66),
(34, 66),
(32, 66),
(33, 66),
(51, 66),
(53, 66),
(52, 66),
(50, 66),
(54, 66),
(37, 64),
(51, 64),
(50, 64),
(20, 64),
(28, 64),
(29, 64),
(24, 64),
(25, 64),
(16, 64),
(36, 64),
(32, 64),
(60, 64),
(41, 64),
(21, 61),
(23, 61),
(22, 61);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(7, 'App\\Models\\User', 68, 'myapptoken', '4457e4a7e091ecdc94677a4493bb4a8432685a9ef5e14371a7b28efd3b132ce3', '[\"*\"]', '2023-04-16 20:39:26', NULL, '2023-04-14 23:26:57', '2023-04-16 20:39:26'),
(8, 'App\\Models\\User', 68, 'myapptoken', 'f5af620e78f062f4d45e0bc128b73a98066a719aa285b5d8a7d7726437914fdf', '[\"*\"]', '2023-04-17 01:46:41', NULL, '2023-04-17 01:46:16', '2023-04-17 01:46:41'),
(9, 'App\\Models\\User', 68, 'myapptoken', 'd70f032c2b7eed60810362174b17ebca5dec1a43bf58b16ae8dcd0614ff25f0f', '[\"*\"]', NULL, NULL, '2023-04-27 01:23:58', '2023-04-27 01:23:58'),
(10, 'App\\Models\\User', 68, 'myapptoken', 'e0a587ee72afe67dc508cbb06e4b880405ce34a042bb3ad7953dc62bd185442b', '[\"*\"]', NULL, NULL, '2023-06-23 13:45:39', '2023-06-23 13:45:39'),
(11, 'App\\Models\\User', 68, 'myapptoken', '4a9686ce2bfab1606c8f3b4134652e77c2c779cca4fbca9668e78f64d1105d66', '[\"*\"]', '2023-06-26 14:30:00', NULL, '2023-06-26 14:26:30', '2023-06-26 14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `schedulebookings`
--

CREATE TABLE `schedulebookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` int(13) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `scheduledate` date DEFAULT NULL,
  `bookingdate` date DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `card` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedulebookings`
--

INSERT INTO `schedulebookings` (`id`, `user_id`, `schedule_id`, `title`, `price`, `scheduledate`, `bookingdate`, `user_name`, `user_email`, `user_phone`, `customer_id`, `card`, `status`, `created_at`, `updated_at`) VALUES
(1, 30, 1, 'title', 100, '2023-04-17', '2023-04-26', 'User2023', 'User2023@mail.com', '12345678', 'cus_NmbIEOmJ02SMLL', 'card_1N125ZSB3wDJDTy6TT7eLszT', NULL, '2023-04-26 01:14:52', '2023-04-26 01:14:52'),
(2, 30, 1, 'title', 100, '2023-04-17', '2023-04-26', 'User2023', 'User2023@mail.com', '12345678', 'cus_NmbMDYQvdT4RmA', 'card_1N129QSB3wDJDTy6JorMdSmu', NULL, '2023-04-26 01:18:51', '2023-04-26 01:18:51'),
(3, 30, 1, 'title', 100, '2023-04-17', '2023-04-26', 'User2023', 'User2023@mail.com', '12345678', 'cus_Nmbmk1N5ttCrNY', 'card_1N12Z9SB3wDJDTy6Yb0mXuIT', NULL, '2023-04-26 01:45:26', '2023-04-26 01:45:26'),
(4, 30, 1, 'title', 100, '2023-04-17', '2023-04-26', 'User2023', 'User2023@mail.com', '12345678', 'cus_Nmbnf9MfudQo4s', 'card_1N12aLSB3wDJDTy61avYAsQl', NULL, '2023-04-26 01:46:40', '2023-04-26 01:46:40'),
(5, 30, 1, 'title', 100, '2023-04-17', '2023-04-26', 'User2023', 'User2023@mail.com', '12345678', 'cus_Nmc7QJm9ef3nbd', 'card_1N12tASB3wDJDTy6ixO52nhD', 'succeeded', '2023-04-26 02:06:07', '2023-04-26 02:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `useraddress` varchar(255) DEFAULT NULL,
  `userstate` varchar(255) DEFAULT NULL,
  `usercity` varchar(255) DEFAULT NULL,
  `usercountry` varchar(251) DEFAULT NULL,
  `userpostcode` int(251) DEFAULT NULL,
  `subscription` varchar(251) DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  `subscription_status` varchar(251) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `is_trainer` int(255) DEFAULT 0,
  `createdby` varchar(100) DEFAULT NULL,
  `trainer_id` int(255) DEFAULT NULL,
  `from_leads` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `phone`, `useraddress`, `userstate`, `usercity`, `usercountry`, `userpostcode`, `subscription`, `subscription_id`, `subscription_status`, `email`, `email_verified_at`, `password`, `type`, `is_trainer`, `createdby`, `trainer_id`, `from_leads`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super', 'Admin', '9072143536', NULL, NULL, NULL, NULL, NULL, 'all', NULL, NULL, 'superadmin@summer.com', NULL, '$2y$10$jfWgGTgWNdPuctaG5EKLx.hpVjsEXq9YNA6MC1wZiWVcgC5xLLMXa', 3, 0, NULL, NULL, NULL, NULL, NULL, '2023-03-21 09:36:11'),
(2, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@summer.com', NULL, '$2y$10$8cj7WZ5SMYCAcmv2yYuequnt07Y95nFlBAFJIJXQRJUX2fTHP1QA6', 1, 0, NULL, NULL, NULL, NULL, NULL, '2023-01-05 08:11:07'),
(3, 'Normal', 'User', '9072145363', 'sdfds', 'ipiop', '465', 'Australia', 4565, NULL, NULL, NULL, 'user@summer.com', NULL, '$2y$10$jfWgGTgWNdPuctaG5EKLx.hpVjsEXq9YNA6MC1wZiWVcgC5xLLMXa', 0, 0, 'admin', NULL, NULL, NULL, NULL, '2023-06-27 10:08:45'),
(4, 'Manager User', NULL, '907214536', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'manager@summer.com', NULL, '$2y$10$SaaKQU1iNip3zNEiak9vkO9niaCh42ipWwRQyzirJlYhvVmQ02gWi', 2, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Subscriber 1', NULL, '1654546654', 'dsfs', 'dsfds', 'dsfsdf', 'Australia', 324324, 'Gold Membership', 2, NULL, 'subscriber1@summer.com', NULL, '$2y$10$fah76oicI9CixgtCZ4PSne9/iJsShCqbRmYejUqoRPKSac1tQHkci', 0, 0, NULL, NULL, NULL, NULL, '2023-01-08 09:58:22', '2023-03-24 11:22:38'),
(8, 'new user', NULL, NULL, 'dfsdf', 'sdfdsf', 'sdfds', 'Australia', 3424, 'Starter Membership', 3, NULL, 'newuser@summer.com', NULL, '$2y$10$ED1DfEyhe6voK1ypR8NYFuyESq2BTfidlxixM3UH.IpmOwJFI2nb2', 0, 0, NULL, NULL, NULL, NULL, '2023-01-29 22:13:21', '2023-03-25 12:04:33'),
(9, 'new user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user1@tutsmake.com', NULL, '$2y$10$4iALLZIuRIVbWd5qGxIQ1OZf3Alqb3LEDyT6cCr4Yqkh6UdRulFn6', 0, 0, NULL, NULL, NULL, NULL, '2023-01-29 22:56:20', '2023-01-29 22:56:20'),
(10, 'new user2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'newuser2@summer.com', NULL, '$2y$10$zL2Vg7cD/xlsIfn8emQXseWkS95MAksH55Iz8HXABSG/rpoxAeFZS', 0, 0, NULL, NULL, NULL, NULL, '2023-01-29 23:02:43', '2023-01-29 23:02:43'),
(11, 'krish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user4@summer.com', NULL, '$2y$10$aEd72nh6hWkMRDONaJszD.DNY9VcKQ/oHqJz4ogDUYenpFGYaDvRu', 0, 0, NULL, NULL, NULL, NULL, '2023-02-02 03:29:32', '2023-02-02 03:29:32'),
(30, 'User2023', 'user2023', '12345678', 'rrt', 'erter', 'ertrer', 'Australia', 4565, 'Gold Membership', 2, NULL, 'User2023@mail.com', NULL, '$2y$10$dZwHDoCApDlTPX/KLMxMz.BoNmppcKjcsKYGLV2hELoB7gIkZ6X0u', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-13 00:45:13', '2023-03-23 09:29:54'),
(31, 'User2024', 'dass', '12345678', 'new bouleward', 'Victoria', 'test', 'Australia', 5656, 'Starter Membership', 0, NULL, 'User2024@amilc.om', NULL, '$2y$10$cenuNfRV4Cu9G.OzcjwtqOC0YVqUt8A27e/eumy7yRyiULUhNreQ6', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-13 00:47:24', '2023-03-13 20:46:53'),
(32, 'dasd', 'sdad', '3423443', NULL, NULL, NULL, NULL, NULL, 'Basic Membership', 6, NULL, 'sd@mail.com', NULL, '$2y$10$G7HoSjJyB3QVYXpBqMAGXe5X9Jalr8BPOboJG0UcVfwHyRxL2OQLi', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-13 00:49:19', '2023-03-13 00:49:19'),
(33, 'dsfs', 'dsfdfs', '12345678', NULL, NULL, NULL, NULL, NULL, 'Gold Membership', 2, NULL, 'ussdfdser@tutsmake.com', NULL, '$2y$10$JisKjgk0Fy535AlQbFqlpu96BAZDVWqIZMb3eFVHlMKJZvcr3S9TK', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-13 00:49:53', '2023-03-13 00:49:53'),
(34, 'sds', 'eef', '6655466', NULL, NULL, NULL, NULL, NULL, 'Silver Membership', 1, NULL, 'johxxxny@mail.com', NULL, '$2y$10$jySrIdExP/3p92Gzp4hILeVayLBwnuYHy6/GQYuwHQnCpjZPsXoBa', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-13 01:12:42', '2023-03-13 01:12:42'),
(35, 'krishna', 'das', '65456566', 'test address', 'ghjh', 'gyjg', 'Australia', 65456, 'Silver Membership', 1, NULL, 'krishnadas@getupsolutions.com.au', NULL, '$2y$10$zitSbFbVggU0oJ5/n7./7Out7A.SYkbg0GKx8i1VbL.x.YaM/F2Cm', 0, 0, 'admin', NULL, NULL, 'LaCINZguSeqD2k8Mq0M8lRj5Q7gULKdlftLvmGZvTPbvpja0SzwBILQzaPwP', '2023-03-13 01:30:54', '2023-03-23 03:38:39'),
(36, 'manuel', NULL, '3454523432', NULL, NULL, NULL, NULL, NULL, 'Silver Membership', 1, NULL, 'manuel123@mail.com', NULL, '$2y$10$86Infgijavk52fO.Twsqz.eJwT3paKoUfh4e01K2yPQJMKIjCKuV6', 0, 0, 'admin', NULL, NULL, NULL, '2023-03-20 09:46:39', '2023-06-21 21:52:38'),
(37, 'Abin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abin123@mail.com', NULL, '$2y$10$x1MO71M3WCD7A8grxOgRAOkq1Dtq925h4aegbqGP.jfJBsxCz2IhK', 0, 0, NULL, NULL, NULL, NULL, '2023-03-20 09:52:14', '2023-03-20 09:52:14'),
(38, 'Vanda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vanda123@mail.com', NULL, '$2y$10$eH3mQ6NQ8z7panGWnA9aZOVst4O9H2KIOXjLgu5iPqAjQmTzm99Fm', 0, 0, NULL, NULL, NULL, NULL, '2023-03-20 09:55:32', '2023-03-20 09:55:32'),
(39, 'sd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sds@mail.com', NULL, '$2y$10$1pTtyJTumwmToq/R7Ih5VOd97/p7pzHvcc/v7GZcvJBoQdduhMlA2', 0, 0, NULL, NULL, NULL, NULL, '2023-03-20 09:56:44', '2023-03-20 09:56:44'),
(40, 'adas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adsasda@mail.com', NULL, '$2y$10$6bgYTVlWvT1RwuBC/yaqROERTbMk7y/Xho8YcQEhNQoa6DeypCTae', 0, 0, NULL, NULL, NULL, NULL, '2023-03-20 09:58:45', '2023-03-20 09:58:45'),
(41, 'vevee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'veve@mail.com', NULL, '$2y$10$t50j1En3ssXRfGf436pd6./ArGE0f1R3tf9DJocO2Sxy8e1neTari', 0, 0, NULL, NULL, NULL, NULL, '2023-03-20 10:10:59', '2023-03-20 10:10:59'),
(44, 'min', NULL, '2343242', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'min@summer.com', NULL, '$2y$10$d57wts5u.5QzLE3Vh8CsF.OqYoqo6ospUcUst5ncCUdiqaGtTycUi', 1, 1, NULL, 25, NULL, NULL, '2023-03-21 09:21:24', '2023-03-21 09:21:24'),
(45, 'Gindy mary', NULL, '1654156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gin@summer.com', NULL, '$2y$10$2t2cCO5eR7Sz2sh9mK6KT.auFIODNIVW/y.2oLzrKr5gaD8ssg6TO', 1, 1, NULL, 26, NULL, NULL, '2023-03-21 09:42:55', '2023-03-21 10:57:58'),
(48, 'new trainer', NULL, '12121312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'newtrainer@summer.com', NULL, '$2y$10$chLK0zWfU.BhW8GZQpXpdOz2egnGhXxGNUaKa.jeH7kaasfkDg/tm', 1, 1, NULL, 30, NULL, NULL, '2023-03-21 11:01:31', '2023-03-21 11:04:28'),
(49, 'vvv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vv@mail.com', NULL, '$2y$10$1T.c3iukKXvbshl.BQ1i2ekhgeS1BLPPN8p2NRTZzclBpneplvrYW', 0, 0, NULL, NULL, NULL, NULL, '2023-03-21 19:02:30', '2023-03-21 19:02:30'),
(50, 'ff', NULL, NULL, 'dfg', 'Victoria', 'dfg', 'Australia', 5656, NULL, NULL, NULL, 'ff@mail.com', NULL, '$2y$10$OJTY6o1OfCuasQ9WakmaSeyd7ERdgbKNmijBRMioNMH.fxOL2CT2C', 0, 0, NULL, NULL, NULL, NULL, '2023-03-21 19:04:22', '2023-03-21 19:04:54'),
(51, 'test', 'user1', '900000000', 'test address', 'Victoria', 'iopoip', 'Australia', 3332, 'Silver Membership', 1, 'active', 'user1@summer.com', NULL, '$2y$10$DMh3r5poX/hM1fvCKZfJYOCLbnypofdFj3j7Ysv6Sj70..naK/dW6', 0, 0, NULL, NULL, NULL, NULL, '2023-03-22 19:41:29', '2023-04-05 00:33:47'),
(52, 'subscriber 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'subscriber2@summer.com', NULL, '$2y$10$Iaj15eV7XTtKTiamvC0dcOAdiqiTs1wO65zDQuqe1WlmaxQT2M4rC', 0, 0, NULL, NULL, NULL, NULL, '2023-04-06 01:19:52', '2023-04-06 01:19:52'),
(53, 'subscriber3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'subscriber3@summer.com', NULL, '$2y$10$yoSCds4UxC.PKK0xIjAf8udeKyFV3bTHt3UtR1veu7ioDlFU9FreC', 0, 0, NULL, NULL, NULL, NULL, '2023-04-06 01:22:02', '2023-04-06 01:22:02'),
(54, 'subscriber 4', NULL, NULL, 'test address', 'vic', 'test city', 'Australia', 5365, NULL, NULL, NULL, 'subscriber4@summer.com', NULL, '$2y$10$ZnDWN/eAG6IeEoizMABYjuctByCXOeiErrEVgPERTj2wgaU5zJtcK', 0, 0, NULL, NULL, NULL, NULL, '2023-04-06 01:24:27', '2023-04-06 01:25:02'),
(55, 'Subscriber 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'subscriber5@summer.com', NULL, '$2y$10$vivScwdGIne.Rmn/jMxn5.etQcpfdRV6fFWPFy0CujheKZB41hRAm', 0, 0, NULL, NULL, NULL, NULL, '2023-04-06 01:32:44', '2023-04-06 01:32:44'),
(61, 'Admin5', 'admin2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin5@summer.com', NULL, '$2y$10$N4Sq0sRk0AhW95Ffyldy6ObpLwSLl3U7q0DRA5FhD3q4jxeHkT3rG', 1, 0, NULL, NULL, NULL, NULL, '2023-04-11 01:14:05', '2023-04-11 01:14:05'),
(64, 'Admin 6', 'Admin 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin6@summer.com', NULL, '$2y$10$dIW8aUaaocohvXLM8iJqK.D3uJdHRR0yBk2MBA/AToY0tjREgz3Tq', 1, 0, NULL, NULL, NULL, NULL, '2023-04-11 02:59:57', '2023-04-11 02:59:57'),
(65, 'Emanuels', 'John', '5646646', NULL, NULL, NULL, NULL, NULL, 'Silver Membership', 1, NULL, 'emanueljohn@mail.com', NULL, '$2y$10$92TayrTGfEyt.rObbw1H5eiLA8jVj1kPQmXaMUKL8KEUHQPoeYjB2', 0, 0, 'admin', NULL, NULL, NULL, '2023-04-11 21:43:30', '2023-04-11 21:44:11'),
(66, 'Admin7', 'admin7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin7@summer.com', NULL, '$2y$10$bWe6LsyTMoYMGy53j5q/pOekX8uLnWQ5BWkrrsZ5T7EqaPT.8o1WS', 1, 0, NULL, NULL, NULL, NULL, '2023-04-12 02:36:49', '2023-04-12 02:36:49'),
(67, 'Mary', NULL, '5465465', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mary@trainer.com', NULL, '$2y$10$iezYrpVS70pJ70pUZ0NaCOlRaWmW1JVkTOq6vet.eipqmDtZyS3DW', 1, 1, NULL, 31, NULL, NULL, '2023-04-12 02:46:48', '2023-04-12 02:46:48'),
(68, 'krishhh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kode4mee@gmail.com', NULL, '$2y$10$EyexYbKzaXzc0aiVHdR9b.fApPeQKP9VgkW3LrCkypBokgqivxUIy', 0, 0, NULL, NULL, NULL, '4qlT9SrL8J5bHMiUufYUXBneQIZR3QYTnNDNrhNK2wazR5QDNoDF3wA0Fso8', '2023-04-14 10:26:44', '2023-04-14 22:11:19'),
(69, 'Ambily_Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gold Membership', 2, NULL, 'ambily@getupsolutions.com.au', NULL, '$2y$10$kGal7FHjAVeFtaSAe901J.VsQNcfizbhrp1lN4yFHOuQcDACt2uC.', 0, 0, NULL, NULL, NULL, NULL, '2023-05-17 10:19:33', '2023-05-17 10:21:19'),
(70, 'Krss', 'kr', '1245454', NULL, NULL, NULL, NULL, NULL, 'Silver Membership', 1, NULL, 'krisss@mail.cz', NULL, '$2y$10$QCHPPX3IR7Cyg7cq0wUxUOjWYM8P67uWpDZ3hH4o0znDirRjSK862', 0, 0, 'admin', NULL, NULL, NULL, '2023-06-08 20:59:38', '2023-06-08 20:59:38'),
(72, 'Manu', NULL, '9072145363', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'manuel@summer.com', NULL, '$2y$10$C.Xhb.YzHsXefREMKoY.V.uBZaDFSBywmHhSa7dsxU9EiGq6lq8O6', 0, 0, NULL, NULL, 'Yes', NULL, '2023-06-08 22:06:52', '2023-06-08 22:06:52'),
(74, 'manu', NULL, '9072145363', NULL, NULL, NULL, NULL, NULL, 'Basic Membership', NULL, NULL, 'johxxxnyx@mail.com', NULL, '$2y$10$MPJc/j9e.a77qEOLKNnlLeB397vqcZgGJcz0LYqITlJn5xgQVEkyG', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-08 22:52:33', '2023-06-09 11:13:05'),
(75, 'sdsd', NULL, '12312', NULL, NULL, NULL, NULL, NULL, 'Starter Membership', 3, NULL, 'manuel123w@summer.com', NULL, '$2y$10$2G6gc1KNyricza.Asdlz8eMhD.tAaVH5TCuboct9vOe7QeO8yziQ6', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-08 22:55:49', '2023-06-09 11:24:37'),
(84, 'Sajeev Muttathu Sali', NULL, '0424704506', NULL, NULL, NULL, NULL, NULL, 'Silver Introduction 59', 1, NULL, 'sajeev@getupsolutions.com.au', NULL, '$2y$10$GMpe/aT38E3gbx/.M/MqluztZLDj9vnHQV/dZyGAzaiQSX96rDrve', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-21 10:24:56', '2023-07-14 08:41:05'),
(85, 'sss', NULL, '545646', NULL, NULL, NULL, NULL, NULL, 'Gold Membership', 2, NULL, 'ss@mail.com', NULL, '$2y$10$6XgTvCxZpe0HEYRtfmgo8OgmokNomW1HzC2zxpqAILSN8WKwmcq12', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-21 22:02:26', '2023-06-21 22:05:27'),
(86, 'www', NULL, '65644646', NULL, NULL, NULL, NULL, NULL, 'Basic Membership', 6, NULL, 'www@mail.com', NULL, '$2y$10$tUjJDNAVCLAigE.WATNdD.61knBjBWYpdbagq0VIjvYN/7J3jVeD2', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-21 22:09:18', '2023-06-21 22:16:04'),
(87, 'ddd', NULL, '45466', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dd@mail.com', NULL, '$2y$10$4n02XEHI3VZJDAgP9PhE8./o1KrgupgeTi5YULlvg4/555VkwQ4PG', 0, 0, 'admin', NULL, 'Yes', NULL, '2023-06-21 22:18:19', '2023-06-21 22:18:51'),
(88, 'Ambily', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ambily@getupsolutions.com', NULL, '$2y$10$yCh45CbOsRaBCfCuvFfKQu9kU7xVzHf5i0kQalIsh4hr2WxekWdUK', 0, 0, NULL, NULL, NULL, NULL, '2023-06-23 11:23:54', '2023-06-23 11:23:54'),
(89, 'ambily_test', 'test', '6565469897', 'test', 'test', 'test', 'Australia', 54243, 'Silver Membership', 1, NULL, 'praicy@getupsolutions.com.au', NULL, '$2y$10$B6rh1j1rD8Rk8kFmwmRllOh.4ygD9/ExwQ8ThTJRDzathOusFDmPy', 0, 0, NULL, NULL, NULL, NULL, '2023-06-26 07:59:22', '2023-06-27 08:52:56'),
(90, 'Tony', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tonytest@gmail.com', NULL, '$2y$10$MKDDKFWhWBEW0F7UqNWX2OPHNQgYGqstUPz07WkTKV69CtxW4crPK', 0, 0, NULL, NULL, NULL, NULL, '2023-06-27 09:33:33', '2023-06-27 09:33:33'),
(91, 'Ambily', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ambilytest321@gmail.com', NULL, '$2y$10$U46Qis8iMhdvg/urt5S08ORNrCCRtVxUT46zp31R4aXQqPV7kobT2', 0, 0, NULL, NULL, NULL, NULL, '2023-06-27 09:45:20', '2023-06-27 09:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `usersubscriptions`
--

CREATE TABLE `usersubscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `interval` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `next_date` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `card` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `subscription_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersubscriptions`
--

INSERT INTO `usersubscriptions` (`id`, `userid`, `title`, `price`, `interval`, `start_date`, `next_date`, `customer_id`, `transaction_id`, `card_type`, `card`, `currency`, `status`, `subscription_status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Silver Membership', 100, 'year', '1679035424', '1710657824', 'cus_NXcF4uVhd1rIFs', 'sub_1MmX0uSB3wDJDTy6j6NwoMPr', '', 'card_1MmX0rSB3wDJDTy6iHV2D6Jq', 'inr', 'inactive', NULL, '2023-03-17 01:14:04', '2023-03-19 01:44:48'),
(2, 3, 'Gold Membership', 160, 'year', '1679210067', '1710832467', 'cus_NYNCiWMoNGlLbj', 'sub_1MnGRjSB3wDJDTy608wOKapo', '', 'card_1MnGRhSB3wDJDTy6nU47TGx0', 'inr', 'inactive', NULL, '2023-03-19 01:44:48', '2023-03-20 02:05:09'),
(3, NULL, 'Starter Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-20 00:07:58', '2023-03-20 00:07:58'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-20 00:08:14', '2023-03-20 00:08:14'),
(5, NULL, 'Gold Membership', 160, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-20 00:28:38', '2023-03-20 00:28:38'),
(6, NULL, 'Gold Membership', 160, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-20 00:29:54', '2023-03-20 00:29:54'),
(7, 35, 'Silver Membership', 100, 'year', '1679297413', '1710919813', 'cus_NYkfrME7905eDO', 'sub_1MndAXSB3wDJDTy6QFRDHCDP', '', 'card_1MndAUSB3wDJDTy63xVfm2Dt', 'inr', 'inactive', NULL, '2023-03-20 02:00:33', '2023-03-20 10:31:52'),
(8, 3, 'Gold Membership', 160, 'year', '1679297688', '1710920088', 'cus_NYkk3aCIS99UXN', 'sub_1MndEySB3wDJDTy65jCKgOkF', '', 'card_1MndEvSB3wDJDTy6UqJXh71Q', 'inr', 'inactive', NULL, '2023-03-20 02:05:08', '2023-03-20 02:07:31'),
(9, 3, 'Silver Membership', 100, 'year', '1679297830', '1710920230', 'cus_NYkmkJxZpW5edJ', 'sub_1MndHGSB3wDJDTy6NYG9pAto', '', 'card_1MndHESB3wDJDTy6kNygFV9t', 'inr', 'inactive', NULL, '2023-03-20 02:07:31', '2023-03-20 02:10:10'),
(10, 3, 'Silver Membership', 100, 'year', '1679297989', '1710920389', 'cus_NYkpIqb7EmWoq7', 'sub_1MndJpSB3wDJDTy6KyxhDbp4', '', 'card_1MndJnSB3wDJDTy6AzQJCj97', 'inr', 'inactive', NULL, '2023-03-20 02:10:10', '2023-03-20 03:07:07'),
(11, 3, 'Starter Membership', 210, 'year', '1679299862', '1710922262', 'cus_NYlK2l70NAzbBC', 'sub_1Mndo2SB3wDJDTy6Ri2CVaOS', '', 'card_1MndnzSB3wDJDTy6k0DkkgGc', 'inr', 'inactive', NULL, '2023-03-20 02:41:23', '2023-03-20 03:07:07'),
(12, 3, 'Gold Membership', 160, 'year', '1679300019', '1710922419', 'cus_NYlNyQA87a5e3U', 'sub_1MndqZSB3wDJDTy6LjptGMot', '', 'card_1MndqXSB3wDJDTy6BrPS0Yzd', 'inr', 'inactive', NULL, '2023-03-20 02:44:00', '2023-03-20 03:07:07'),
(13, 3, 'Gold Membership', 160, 'year', '1679300416', '1710922816', 'cus_NYlTD0P3LyS9vq', 'sub_1MndwySB3wDJDTy6i53cnXqb', '', 'card_1MndwwSB3wDJDTy63PS1QVCR', 'inr', 'inactive', NULL, '2023-03-20 02:50:37', '2023-03-20 03:07:07'),
(14, 3, 'Silver Membership', 100, 'year', '1679300571', '1710922971', 'cus_NYlWCx7GqehhZQ', 'sub_1MndzUSB3wDJDTy6hBEQeWWy', '', 'card_1MndzRSB3wDJDTy60cTc3H2X', 'inr', 'inactive', NULL, '2023-03-20 02:53:12', '2023-03-20 03:07:07'),
(15, 3, 'Silver Membership', 100, 'year', '1679301407', '1710923807', 'cus_NYlkaX6L5rmdYL', 'sub_1MneCxSB3wDJDTy6BtxKJRkb', '', 'card_1MneCuSB3wDJDTy6Jbs9PLTU', 'inr', 'inactive', NULL, '2023-03-20 03:07:07', '2023-03-20 03:11:02'),
(16, 3, 'Gold Membership', 160, 'year', '1679301511', '1710923911', 'cus_NYlmNrFmT4hYYI', 'sub_1MneEdSB3wDJDTy6hqtrnQRV', '', 'card_1MneEbSB3wDJDTy6RyMHxx1g', 'inr', 'inactive', NULL, '2023-03-20 03:08:51', '2023-03-20 03:11:02'),
(17, 3, 'Silver Membership', 100, 'year', '1679301637', '1710924037', 'cus_NYloVWVtoOEwzH', 'sub_1MneGfSB3wDJDTy6GdWCXxGu', '', 'card_1MneGdSB3wDJDTy61S096FB6', 'inr', 'inactive', NULL, '2023-03-20 03:10:58', '2023-03-20 03:11:54'),
(18, 3, 'Gold Membership', 160, 'year', '1679301690', '1710924090', 'cus_NYlpgeUuZ99uAr', 'sub_1MneHWSB3wDJDTy6ToOC9b7k', '', 'card_1MneHTSB3wDJDTy6wAtvaCPb', 'inr', 'inactive', NULL, '2023-03-20 03:11:50', '2023-03-20 03:16:23'),
(19, 3, 'Silver Membership', 100, 'year', '1679301790', '1710924190', 'cus_NYlqmLbEW6GXMo', 'sub_1MneJ8SB3wDJDTy6oiLgCEDd', '', 'card_1MneJ6SB3wDJDTy6G0YkP7al', 'inr', 'inactive', NULL, '2023-03-20 03:13:31', '2023-03-20 03:16:23'),
(20, 3, 'Gold Membership', 160, 'year', '1679301880', '1710924280', 'cus_NYlslEdAplaVgq', 'sub_1MneKaSB3wDJDTy6bTykDTRZ', '', 'card_1MneKYSB3wDJDTy6tyWICv2g', 'inr', 'inactive', NULL, '2023-03-20 03:15:01', '2023-03-20 03:16:23'),
(21, 3, 'Silver Membership', 100, 'year', '1679301959', '1710924359', 'cus_NYltdktOPd3qzb', 'sub_1MneLrSB3wDJDTy6WgjiJCxV', '', 'card_1MneLpSB3wDJDTy6qGrzxX4c', 'inr', 'inactive', NULL, '2023-03-20 03:16:20', '2023-03-20 03:19:22'),
(22, 3, 'Starter Membership', 210, 'year', '1679302138', '1710924538', 'cus_NYlwJCiC3hrDhh', 'sub_1MneOkSB3wDJDTy6NHdVTi6Q', '', 'card_1MneOiSB3wDJDTy6Lq123CBa', 'inr', 'active', NULL, '2023-03-20 03:19:19', '2023-03-20 03:19:19'),
(23, 35, 'Starter Membership', 210, 'year', '1679328084', '1710950484', 'cus_NYsvD06SMQQdCD', 'sub_1Mnl9ESB3wDJDTy6bwFOyT16', '', 'card_1Mnl9CSB3wDJDTy64Py0w6pl', 'inr', 'inactive', NULL, '2023-03-20 10:31:45', '2023-03-20 10:35:31'),
(24, 35, 'Gold Membership', 160, 'year', '1679328305', '1710950705', 'cus_NYsyoAoJyfMkxu', 'sub_1MnlCnSB3wDJDTy6xAooyXlE', '', 'card_1MnlClSB3wDJDTy68NGYs5QJ', 'inr', 'inactive', NULL, '2023-03-20 10:35:26', '2023-03-20 10:41:36'),
(25, 35, 'Gold Membership', 160, 'year', '1679328671', '1710951071', 'cus_NYt4eGeqBJ03ft', 'sub_1MnlIhSB3wDJDTy6C9tjHKcp', '', 'card_1MnlIeSB3wDJDTy68jiqpe36', 'inr', 'inactive', NULL, '2023-03-20 10:41:31', '2023-03-20 10:44:26'),
(26, 35, 'Silver Membership', 100, 'year', '1679328840', '1710951240', 'cus_NYt7EFHi6MOPe5', 'sub_1MnlLQSB3wDJDTy6SVX3ooLX', '', 'card_1MnlLOSB3wDJDTy6FX5b0kPP', 'inr', 'inactive', NULL, '2023-03-20 10:44:21', '2023-03-20 10:49:44'),
(27, 35, 'Gold Membership', 160, 'year', '1679329159', '1710951559', 'cus_NYtCXp97oo6gbn', 'sub_1MnlQZSB3wDJDTy6FGlJKeI6', '', 'card_1MnlQXSB3wDJDTy6Hp8X3DdA', 'inr', 'inactive', NULL, '2023-03-20 10:49:40', '2023-03-20 10:52:06'),
(28, 35, 'Silver Membership', 100, 'year', '1679329300', '1710951700', 'cus_NYtFsHehuqu3Vc', 'sub_1MnlSqSB3wDJDTy6P3qfCK6Q', '', 'card_1MnlSoSB3wDJDTy6f7OLFXXm', 'inr', 'active', NULL, '2023-03-20 10:52:01', '2023-03-20 10:52:01'),
(29, 51, 'Silver Membership', 100, 'year', '1679533904', '1711156304', 'cus_NZmF8HfXviFTTK', 'sub_1MocguSB3wDJDTy6eL36ciO4', '', 'card_1MocgrSB3wDJDTy6FlefR4Vr', 'inr', 'inactive', NULL, '2023-03-22 19:42:04', '2023-04-03 02:33:30'),
(30, 6, 'Gold Membership', 160, 'year', '1679676731', '1711299131', 'cus_NaOdB570sMJT3v', 'sub_1MpDqZSB3wDJDTy6y9Zm8VWz', '', 'card_1MpDqWSB3wDJDTy6CSjUDYdM', 'inr', 'active', NULL, '2023-03-24 11:22:31', '2023-03-24 11:22:31'),
(31, 8, NULL, 100, 'year', '1679722118', '1711344518', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1MpPeaSB3wDJDTy6Rg382OCF', 'inr', 'inactive', NULL, '2023-03-24 23:58:59', '2023-03-25 00:07:58'),
(32, 8, NULL, 210, 'year', '1679722653', '1711345053', 'cus_NaazC71lalm2dx', 'sub_1MpPnFSB3wDJDTy6cryp9O2r', '', 'card_1MpPnDSB3wDJDTy6YEDt4sau', 'inr', 'inactive', NULL, '2023-03-25 00:07:54', '2023-03-25 00:15:59'),
(33, 8, NULL, 160, 'year', '1679723133', '1711345533', 'cus_Nab7S89F9qfNrg', 'sub_1MpPuzSB3wDJDTy6KkS9VY9z', '', 'card_1MpPuxSB3wDJDTy6BmNkSPab', 'inr', 'inactive', NULL, '2023-03-25 00:15:54', '2023-03-25 00:50:41'),
(34, 8, 'Gold Membership', 160, 'year', '1679725214', '1711347614', 'cus_NabfxPfIaMFbMv', 'sub_1MpQSYSB3wDJDTy6Zzj8LP23', '', 'card_1MpQSVSB3wDJDTy6FXPyjH9x', 'inr', 'inactive', NULL, '2023-03-25 00:50:35', '2023-03-25 01:31:44'),
(35, 8, 'Gold Membership', 100, 'year', '1679722118', '1711344518', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1MpR6FSB3wDJDTy6ly6YHULQ', 'inr', 'inactive', NULL, '2023-03-25 01:31:38', '2023-03-25 01:33:49'),
(36, 8, 'Silver Membership', 160, 'year', '1679722118', '1711344518', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1MpR8HSB3wDJDTy6LzmZ6blR', 'inr', 'inactive', NULL, '2023-03-25 01:33:45', '2023-03-25 10:45:24'),
(37, 8, 'Gold Membership', 100, 'year', '1679722118', '1711344518', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1MpZjzSB3wDJDTy6nDWcPG3I', 'inr', 'inactive', NULL, '2023-03-25 10:45:16', '2023-03-25 10:54:57'),
(38, 8, 'Starter Membership', 160, 'year', '1679722118', '1711344518', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1MpZtCSB3wDJDTy6WeCXmanF', 'inr', 'inactive', NULL, '2023-03-25 10:54:48', '2023-03-25 11:05:29'),
(39, 8, 'Silver Membership', 210, 'year', '1679722118', '1711383868', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1Mpa3USB3wDJDTy68nX7tzj8', 'inr', 'inactive', NULL, '2023-03-25 11:05:24', '2023-03-25 11:07:59'),
(40, 8, 'Gold Membership', 100, 'year', '1679722118', '1711384505', 'cus_NaaqyzzeBz66NX', 'sub_1MpPecSB3wDJDTy69cWcT7I9', '', 'card_1Mpa5vSB3wDJDTy6iUWbmzwT', 'inr', 'inactive', NULL, '2023-03-25 11:07:54', '2023-03-25 11:24:35'),
(41, 8, 'Starter Membership', 210, 'year', '1679763249', '1711385649', 'cus_Nalthyr6Qb6y0s', 'sub_1MpaM1SB3wDJDTy64UQ7Nlhv', '', 'card_1MpaLzSB3wDJDTy601mJveuW', 'inr', 'active', NULL, '2023-03-25 11:24:30', '2023-03-25 11:24:30'),
(42, 51, 'Gold Membership', 160, 'year', '1680508980', '1712131380', 'cus_Ne0MkfkqaBPYSW', 'sub_1MsiLwSB3wDJDTy6gnEg5LDu', '', 'card_1MsiLtSB3wDJDTy6CWDGXJw9', 'inr', 'inactive', NULL, '2023-04-03 02:33:24', '2023-04-03 02:50:09'),
(43, 51, 'Starter Membership', 210, 'year', '1680509979', '1712132379', 'cus_Ne0dFLmVdLL8EW', 'sub_1Msic3SB3wDJDTy6HQw9lV2j', '', 'card_1MsibzSB3wDJDTy6mGhb5XQK', 'inr', 'inactive', NULL, '2023-04-03 02:50:02', '2023-04-03 02:57:45'),
(44, 51, 'Silver Membership', 100, 'year', '1680510437', '1712132837', 'cus_Ne0k2oTkKwTdhw', 'sub_1MsijRSB3wDJDTy6HNaUDzvH', '', 'card_1MsijPSB3wDJDTy6M8UHj2fL', 'inr', 'inactive', NULL, '2023-04-03 02:57:40', '2023-04-03 02:59:33'),
(45, 51, 'Gold Membership', 160, 'year', '1680510544', '1712132944', 'cus_Ne0mS2AjSvufgp', 'sub_1MsilBSB3wDJDTy6UjpMCRHB', '', 'card_1Msil8SB3wDJDTy6U1fDNd8O', 'inr', 'inactive', NULL, '2023-04-03 02:59:28', '2023-04-03 03:02:58'),
(46, 51, 'Silver Membership', 100, 'year', '1680510750', '1712133150', 'cus_Ne0qK4idKxNn2G', 'sub_1MsioUSB3wDJDTy669ozzvEk', '', 'card_1MsioSSB3wDJDTy6eLCjGA7H', 'inr', 'inactive', NULL, '2023-04-03 03:02:53', '2023-04-03 03:07:45'),
(47, 51, 'Gold Membership', 160, 'year', '1680511037', '1712133437', 'cus_Ne0uliM2s6mWx1', 'sub_1Msit7SB3wDJDTy6nck5SlWv', '', 'card_1Msit5SB3wDJDTy6oOU8fWhf', 'inr', 'inactive', NULL, '2023-04-03 03:07:40', '2023-04-03 03:08:22'),
(48, 51, 'Silver Membership', 100, 'year', '1680512078', '1712134478', 'cus_Ne1CVgpDNeQaIt', 'sub_1Msj9uSB3wDJDTy6A8cM2PJ9', '', 'card_1Msj9rSB3wDJDTy6ADnw4uDi', 'inr', 'inactive', NULL, '2023-04-03 03:25:01', '2023-04-03 03:27:06'),
(49, 51, 'Gold Membership', 160, 'year', '1680512199', '1712134599', 'cus_Ne1EhRc4innzNz', 'sub_1MsjBrSB3wDJDTy65REcIVHH', '', 'card_1MsjBoSB3wDJDTy6C9fdKcrZ', 'inr', 'inactive', NULL, '2023-04-03 03:27:02', '2023-04-03 03:29:36'),
(50, 51, 'Silver Membership', 100, 'year', '1680512348', '1712134748', 'cus_Ne1Gwmpbfo7vt3', 'sub_1MsjEGSB3wDJDTy6l5VBjNaa', '', 'card_1MsjEDSB3wDJDTy6OHrgBYAm', 'inr', 'inactive', NULL, '2023-04-03 03:29:31', '2023-04-03 03:30:59'),
(51, 51, 'Gold Membership', 160, 'year', '1680512431', '1712134831', 'cus_Ne1IIpXKva3xTU', 'sub_1MsjFbSB3wDJDTy6YgMmVegu', '', 'card_1MsjFZSB3wDJDTy6q8NLfRrA', 'inr', 'inactive', NULL, '2023-04-03 03:30:54', '2023-04-03 03:31:53'),
(52, 51, 'Starter Membership', 210, 'year', '1680512622', '1712135022', 'cus_Ne1Le6z65rwGiZ', 'sub_1MsjIgSB3wDJDTy6F23ti75U', '', 'card_1MsjIeSB3wDJDTy6iUpx3xlH', 'inr', 'inactive', 'canceled', '2023-04-03 03:34:05', '2023-04-03 03:34:40'),
(53, 51, 'Gold Membership', 160, 'year', '1680513612', '1712136012', 'cus_Ne1bnv6Bl424Y0', 'sub_1MsjYeSB3wDJDTy6rZEgeQ9y', '', 'card_1MsjYcSB3wDJDTy6AL7DCAT6', 'inr', 'inactive', 'canceled', '2023-04-03 03:50:35', '2023-04-03 03:51:17'),
(54, 51, 'Silver Membership', 100, 'year', '1680534143', '1712156543', 'cus_Ne78QvslI7cIwn', 'sub_1MsotnSB3wDJDTy67Iu4J7WC', '', 'card_1MsotlSB3wDJDTy6h22HVybi', 'inr', 'inactive', 'canceled', '2023-04-03 09:32:46', '2023-04-03 09:41:36'),
(55, 51, 'Gold Membership', 160, 'year', '1680535011', '1712157411', 'cus_Ne7MySBam9NxxX', 'sub_1Msp7nSB3wDJDTy6kCTiYyF0', '', 'card_1Msp7lSB3wDJDTy6ungFUki4', 'inr', 'inactive', 'canceled', '2023-04-03 09:47:13', '2023-04-03 09:57:49'),
(56, 51, 'Silver Membership', 100, 'year', '1680535790', '1712158190', 'cus_Ne7ZxgiB6pzZRi', 'sub_1MspKMSB3wDJDTy6nEgVIsdb', '', 'card_1MspKKSB3wDJDTy67O3iAEyQ', 'inr', 'inactive', 'canceled', '2023-04-03 10:00:13', '2023-04-03 10:05:05'),
(57, 51, 'Silver Membership', 100, 'year', '1680536135', '1712158535', 'cus_Ne7fEHKFRzi5Cx', 'sub_1MspPvSB3wDJDTy6HlV5SDLI', '', 'card_1MspPtSB3wDJDTy6cpXJkl5X', 'inr', 'inactive', 'canceled', '2023-04-03 10:05:57', '2023-04-03 10:23:02'),
(58, 51, 'Starter Membership', 210, 'year', '1680537568', '1712159968', 'cus_Ne83V9ZCgE3A6s', 'sub_1Mspn2SB3wDJDTy6AKhSDuGR', '', 'card_1Mspn0SB3wDJDTy6iEP1PovP', 'inr', 'inactive', 'canceled', '2023-04-03 10:29:50', '2023-04-04 00:48:34'),
(59, 51, 'Silver Membership', 100, 'year', '1680589287', '1712211687', 'cus_NeLxYsgUkSJgzi', 'sub_1Mt3FDSB3wDJDTy6mvDtxcop', '', 'card_1Mt3FBSB3wDJDTy64iSatWRg', 'inr', 'inactive', 'canceled', '2023-04-04 00:51:49', '2023-04-04 00:52:15'),
(60, 51, 'Gold Membership', 160, 'year', '1680589613', '1712212013', 'cus_NeM2hEZaB7FfHn', 'sub_1Mt3KTSB3wDJDTy6lG7fhuVY', '', 'card_1Mt3KRSB3wDJDTy6uhkdNbsK', 'inr', 'inactive', 'canceled', '2023-04-04 00:57:15', '2023-04-04 00:57:38'),
(61, 51, 'Gold Membership', 160, 'year', '1680589724', '1712212124', 'cus_NeM4W2xWUpdEMp', 'sub_1Mt3MGSB3wDJDTy6Bjx23GzF', '', 'card_1Mt3MDSB3wDJDTy6Qvjrxssp', 'inr', 'inactive', 'canceled', '2023-04-04 00:59:06', '2023-04-04 01:01:00'),
(62, 51, 'Silver Membership', 100, 'year', '1680589963', '1712212363', 'cus_NeM8W6Ejv77FUc', 'sub_1Mt3Q8SB3wDJDTy6EwTMjp9W', '', 'card_1Mt3Q5SB3wDJDTy6eltH5wJI', 'inr', 'inactive', 'canceled', '2023-04-04 01:03:06', '2023-04-04 01:03:25'),
(63, 51, 'Gold Membership', 160, 'year', '1680590010', '1712212410', 'cus_NeM921BfAuRJuh', 'sub_1Mt3QsSB3wDJDTy66qwp8iPh', '', 'card_1Mt3QqSB3wDJDTy67g3nT1D5', 'inr', 'inactive', 'canceled', '2023-04-04 01:03:52', '2023-04-04 01:04:20'),
(64, 51, 'Silver Membership', 100, 'year', '1680670991', '1712293391', 'cus_NehuisCehEKYkU', 'sub_1MtOV1SB3wDJDTy6Mh0EB45l', '', 'card_1MtOUxSB3wDJDTy68HbCfTNj', 'inr', 'inactive', NULL, '2023-04-04 23:33:33', '2023-04-04 23:34:55'),
(65, 51, 'Gold Membership', 160, 'year', '1680671066', '1712293466', 'cus_NehwLiMlNzC5Rl', 'sub_1MtOWESB3wDJDTy6qzDX9eZY', '', 'card_1MtOWBSB3wDJDTy6o2pI5Nv7', 'inr', 'inactive', 'canceled', '2023-04-04 23:34:49', '2023-04-04 23:35:43'),
(66, 51, 'Silver Membership', 100, 'year', '1680674597', '1712296997', 'cus_Neis4fLcxxMbEA', 'sub_1MtPRBSB3wDJDTy6AUZProCR', '', 'card_1MtPR8SB3wDJDTy69vvQGnut', 'inr', 'active', NULL, '2023-04-05 00:33:39', '2023-04-05 00:33:39'),
(67, NULL, 'Silver Membership', 100, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-11 21:43:30', '2023-04-11 21:43:30'),
(68, NULL, 'Silver Membership', 100, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-11 21:44:11', '2023-04-11 21:44:11'),
(69, 69, 'Gold Membership', 160, 'year', '1684300876', '1715923276', 'cus_NuRgAj69Bcm7fA', 'sub_1N8cnYSB3wDJDTy6Ga5ReslA', '', 'card_1N8cnVSB3wDJDTy6Ss68Fi1n', 'inr', 'active', NULL, '2023-05-17 10:21:18', '2023-05-17 10:21:18'),
(70, NULL, 'Silver Membership', 100, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-08 20:59:38', '2023-06-08 20:59:38'),
(71, NULL, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 10:32:11', '2023-06-09 10:32:11'),
(72, NULL, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 10:33:47', '2023-06-09 10:33:47'),
(73, NULL, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 10:34:15', '2023-06-09 10:34:15'),
(74, NULL, 'Basic Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:13:05', '2023-06-09 11:13:05'),
(75, NULL, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:19:57', '2023-06-09 11:19:57'),
(76, NULL, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:22:58', '2023-06-09 11:22:58'),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:23:57', '2023-06-09 11:23:57'),
(78, NULL, 'Gold Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:24:10', '2023-06-09 11:24:10'),
(79, NULL, 'Starter Membership', 210, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 11:24:37', '2023-06-09 11:24:37'),
(80, 78, 'Silver Membership', 100, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:18:33', '2023-06-09 12:18:33'),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:22:50', '2023-06-09 12:22:50'),
(82, 79, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:23:31', '2023-06-09 12:23:31'),
(83, NULL, 'Gold Membership', 160, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:29:21', '2023-06-09 12:29:21'),
(84, NULL, 'Starter Membership', 210, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:30:15', '2023-06-09 12:30:15'),
(85, NULL, 'Basic Membership', 50, 'week', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:32:47', '2023-06-09 12:32:47'),
(86, 83, 'Gold Membership', 160, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-09 12:39:45', '2023-06-09 12:39:45'),
(87, 36, 'Silver Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 21:52:38', '2023-06-21 21:52:38'),
(88, 85, 'Gold Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:02:53', '2023-06-21 22:02:53'),
(89, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:04:39', '2023-06-21 22:04:39'),
(90, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:04:49', '2023-06-21 22:04:49'),
(91, 85, 'Gold Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:05:26', '2023-06-21 22:05:26'),
(92, 86, 'Basic Membership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:16:03', '2023-06-21 22:16:03'),
(93, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 22:18:50', '2023-06-21 22:18:50'),
(94, 89, 'Starter Membership', 210, 'year', '1687748412', '1719370812', 'cus_O9ORaudzzWFm9H', 'sub_1NN5eySB3wDJDTy6e5tZgWtZ', '', 'card_1NN5evSB3wDJDTy691pi67ga', 'inr', 'active', NULL, '2023-06-26 08:00:13', '2023-06-26 08:00:13'),
(95, 89, 'Silver Membership', 100, 'year', '1687837974', '1719460374', 'cus_O9mWQMF9aM0iYE', 'sub_1NNSxWSB3wDJDTy6g8MuXI2I', '', 'card_1NNSxTSB3wDJDTy6LN52mca6', 'inr', 'active', NULL, '2023-06-27 08:52:55', '2023-06-27 08:52:55'),
(96, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-27 10:08:45', '2023-06-27 10:08:45'),
(97, 84, 'Silver Introduction 59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-14 08:41:04', '2023-07-14 08:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_usersubscription`
--

CREATE TABLE `user_usersubscription` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `usersubscription_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_usersubscription`
--

INSERT INTO `user_usersubscription` (`user_id`, `usersubscription_id`) VALUES
(3, 1),
(3, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(35, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(35, 23),
(35, 24),
(35, 25),
(35, 26),
(35, 27),
(35, 28),
(51, 29),
(6, 30),
(8, 31),
(8, 32),
(8, 33),
(8, 34),
(8, 35),
(8, 36),
(8, 37),
(8, 38),
(8, 39),
(8, 40),
(8, 41),
(51, 42),
(51, 43),
(51, 44),
(51, 45),
(51, 46),
(51, 47),
(51, 48),
(51, 49),
(51, 50),
(51, 51),
(51, 52),
(51, 53),
(51, 54),
(51, 55),
(51, 56),
(51, 57),
(51, 58),
(51, 59),
(51, 60),
(51, 61),
(51, 64),
(51, 66),
(64, 67),
(64, 68),
(69, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(89, 94),
(89, 95),
(1, 96),
(1, 97);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincontactsettings`
--
ALTER TABLE `admincontactsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincoursecats`
--
ALTER TABLE `admincoursecats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincourses`
--
ALTER TABLE `admincourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincourse_admincoursecat`
--
ALTER TABLE `admincourse_admincoursecat`
  ADD KEY `admincourse_admincoursecat_admincourse_id_foreign` (`admincourse_id`),
  ADD KEY `admincourse_admincoursecat_admincoursecat_id_foreign` (`admincoursecat_id`);

--
-- Indexes for table `admincourse_adminschedule`
--
ALTER TABLE `admincourse_adminschedule`
  ADD KEY `admincourse_adminschedule_admincourse_id_foreign` (`admincourse_id`),
  ADD KEY `admincourse_adminschedule_adminschedule_id_foreign` (`adminschedule_id`);

--
-- Indexes for table `admincourse_adminsubscription`
--
ALTER TABLE `admincourse_adminsubscription`
  ADD KEY `admincourse_adminsubscription_admincourse_id_foreign` (`admincourse_id`),
  ADD KEY `admincourse_adminsubscription_adminsubscription_id_foreign` (`adminsubscription_id`);

--
-- Indexes for table `admincourse_admintrainer`
--
ALTER TABLE `admincourse_admintrainer`
  ADD KEY `admincourse_admintrainer_admincourse_id_foreign` (`admincourse_id`),
  ADD KEY `admincourse_admintrainer_admintrainer_id_foreign` (`admintrainer_id`);

--
-- Indexes for table `admincourse_order`
--
ALTER TABLE `admincourse_order`
  ADD KEY `admincourse_order_admincourse_id_foreign` (`admincourse_id`),
  ADD KEY `admincourse_order_order_id_foreign` (`order_id`);

--
-- Indexes for table `adminevents`
--
ALTER TABLE `adminevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admingeneralsettings`
--
ALTER TABLE `admingeneralsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminondemandcats`
--
ALTER TABLE `adminondemandcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminondemands`
--
ALTER TABLE `adminondemands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpages`
--
ALTER TABLE `adminpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpaymentsettings`
--
ALTER TABLE `adminpaymentsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminreports`
--
ALTER TABLE `adminreports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminschedulecats`
--
ALTER TABLE `adminschedulecats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminschedules`
--
ALTER TABLE `adminschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsubscriptions`
--
ALTER TABLE `adminsubscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintrainers`
--
ALTER TABLE `admintrainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintrainings`
--
ALTER TABLE `admintrainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintransactions`
--
ALTER TABLE `admintransactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminwellnesses`
--
ALTER TABLE `adminwellnesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedevents`
--
ALTER TABLE `bookedevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookedevents_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD KEY `order_user_order_id_foreign` (`order_id`),
  ADD KEY `order_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedulebookings`
--
ALTER TABLE `schedulebookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedulebookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersubscriptions`
--
ALTER TABLE `usersubscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_usersubscription`
--
ALTER TABLE `user_usersubscription`
  ADD KEY `user_usersubscription_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincontactsettings`
--
ALTER TABLE `admincontactsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admincoursecats`
--
ALTER TABLE `admincoursecats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admincourses`
--
ALTER TABLE `admincourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `adminevents`
--
ALTER TABLE `adminevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admingeneralsettings`
--
ALTER TABLE `admingeneralsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminondemandcats`
--
ALTER TABLE `adminondemandcats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminondemands`
--
ALTER TABLE `adminondemands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminpages`
--
ALTER TABLE `adminpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `adminpaymentsettings`
--
ALTER TABLE `adminpaymentsettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminreports`
--
ALTER TABLE `adminreports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminschedulecats`
--
ALTER TABLE `adminschedulecats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminschedules`
--
ALTER TABLE `adminschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=579;

--
-- AUTO_INCREMENT for table `adminsubscriptions`
--
ALTER TABLE `adminsubscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admintrainers`
--
ALTER TABLE `admintrainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `admintrainings`
--
ALTER TABLE `admintrainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admintransactions`
--
ALTER TABLE `admintransactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminwellnesses`
--
ALTER TABLE `adminwellnesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookedevents`
--
ALTER TABLE `bookedevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedulebookings`
--
ALTER TABLE `schedulebookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `usersubscriptions`
--
ALTER TABLE `usersubscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admincourse_admincoursecat`
--
ALTER TABLE `admincourse_admincoursecat`
  ADD CONSTRAINT `admincourse_admincoursecat_admincourse_id_foreign` FOREIGN KEY (`admincourse_id`) REFERENCES `admincourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admincourse_admincoursecat_admincoursecat_id_foreign` FOREIGN KEY (`admincoursecat_id`) REFERENCES `admincoursecats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admincourse_adminschedule`
--
ALTER TABLE `admincourse_adminschedule`
  ADD CONSTRAINT `admincourse_adminschedule_admincourse_id_foreign` FOREIGN KEY (`admincourse_id`) REFERENCES `admincourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admincourse_adminschedule_adminschedule_id_foreign` FOREIGN KEY (`adminschedule_id`) REFERENCES `adminschedules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admincourse_adminsubscription`
--
ALTER TABLE `admincourse_adminsubscription`
  ADD CONSTRAINT `admincourse_adminsubscription_admincourse_id_foreign` FOREIGN KEY (`admincourse_id`) REFERENCES `admincourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admincourse_adminsubscription_adminsubscription_id_foreign` FOREIGN KEY (`adminsubscription_id`) REFERENCES `adminsubscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admincourse_admintrainer`
--
ALTER TABLE `admincourse_admintrainer`
  ADD CONSTRAINT `admincourse_admintrainer_admincourse_id_foreign` FOREIGN KEY (`admincourse_id`) REFERENCES `admincourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admincourse_admintrainer_admintrainer_id_foreign` FOREIGN KEY (`admintrainer_id`) REFERENCES `admintrainers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admincourse_order`
--
ALTER TABLE `admincourse_order`
  ADD CONSTRAINT `admincourse_order_admincourse_id_foreign` FOREIGN KEY (`admincourse_id`) REFERENCES `admincourses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admincourse_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bookedevents`
--
ALTER TABLE `bookedevents`
  ADD CONSTRAINT `bookedevents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `order_user_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedulebookings`
--
ALTER TABLE `schedulebookings`
  ADD CONSTRAINT `schedulebookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_usersubscription`
--
ALTER TABLE `user_usersubscription`
  ADD CONSTRAINT `user_usersubscription_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
