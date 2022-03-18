-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2020 at 02:45 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shawod_shawod`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'shawod', '990d70d0e23344bda55bdc586c41652e'),
(2, 'nqobile', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'mlondie', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `f_key` int(11) NOT NULL,
  `c_key` int(11) NOT NULL,
  `o_key` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `sub_title`, `text`) VALUES
(1, 'DNS Privacy: Solutions emerging, but deployment lags', 'Mat FordTechnology Programme ManagerRSSSubscribe', 'internetsociety.org  \r\n\r\n\r\nI recently attended the DNS Privacy Workshop colocated with this year\'s NDSS 2017 in San Diego, California. DNS privacy has received considerable attention from researchers and engineers since the Snowden revelations of state-backed pervasive surveillance in 2013 and the workshop covered a lot of ground.\r\n\r\nFor some Internet users, anonymity is critically important and a service like ToR exists to obfuscate the location and browsing habits of ToR users. Even ToR users have a need to resolve names using DNS however (for non-hidden services) and they are then vulnerable to the exit relay operator\'s DNS configuration. The addition of DNS data to existing attack techniques makes attacks more precise, especially for infrequently visited websites (e.g. dissident sites). Exit relay operators are therefore advised to run their own resolvers with QNAME minimisation. In the long term, adding confidentiality to DNS is necessary to prevent it being used as a vector for de-anonymisation of ToR users.\r\n\r\nCuriously, ToR was also discussed as a potential solution to the problem of DNS recursive resolver logs falling into the wrong hands. Incorporating a micropayment solution to align incentives and using ToR to anonymise traffic could create a recursive resolution service that wouldn\'t have the logging vulnerability problems we see today. Latency of such a service would however be an issue in many cases, which brings me to my next point.\r\n\r\nThere is a critical tension between contemporary uses of the DNS to provide resilient and low-latency services versus the desire for greater privacy. Most DNS TTLs of the Alexa top 500 are less than 20 minutes. TTLs of 20 minutes make caching solutions and tools like Namecoin effectively impractical for popular sites. One suggestion is to download large caches of DNS data from relatively anonymous locations (libraries, coffeeshops, etc.) and then use those when in more privacy-vulnerable locations, e.g. at home. However within a 2 week window one third of A records (and nearly two thirds of AAAA records go figure) for the Alexa top 500 have changed, so this approach, while certainly possible, has clear limitations.\r\n\r\nWhile DNS privacy seems like an unambiguously good thing, greater confidentiality of DNS traffic will impact researchers and service providers that rely on passive collection of DNS information. Codifying anonymisation and data access practices may help here.\r\n\r\nWorkshop participants heard concerns about the pace with which the technical building blocks for adding confidentiality to DNS, namely DNS-over-TLS, are being adopted. However, we should remember that DNS-over-TLS was only standardized 9 months ago in RFC 7858.\r\n\r\nIn addition to addressing the implementation and deployment challenge, the DNS community needs to heed the lessons about usable security that have been learned, e.g. from HTTP(S) security indicators and SSL Certificate warnings. In order for DNS privacy solutions to become pervasive, addressing the usability challenge is essential. It may be that the emerging solutions to the DNS privacy problem are not sufficiently baked or too hot off the press to expect much deployment to have taken place, or a stronger effort to evangelise the availability of new tools may be necessary.\r\n\r\nThe workshop also considered a detailed analysis of padding DNS queries and responses (padding encrypted DNS messages makes it harder to apply size-based correlation with known unencrypted messages), securing DNS Service Discovery, and a detailed analysis of the tradeoffs between the numerous authentication mechanisms for DNS privacy enabling recursive resolvers.\r\n\r\nThe workshop concluded with breakouts creating content for the workshop report including conclusions, recognised challenges and research agenda recommendations. A full report of the workshop will be available in due course.\r\n\r\nSlides from the workshop are available and audio should also be available soon. The DNS Privacy Project pages provide extensive further reading and details regarding available implementions of servers and clients supporting DNS-over-TLS.\r\n\r\n\r\n'),
(2, 'Outstanding Ways to Promote Your New Website', 'Bryan Caplan', 'Official Shawod Blog  \r\n\r\n\r\n \r\n\r\nAccording to AdWeek, 81 percent of consumers want to see a company\'s website before they buy a product or service.\r\n\r\nSome people visit a particular website directly, perhaps through a link they saw on social media, in an email marketing campaign, or in a blog post they read but the majority, about 60 percent, begin by entering keywords into a search engine. \r\n\r\nIf prospective customers don\'t see your website through online searches, or through your other marketing channels, you\'re not going to see much site traffic, and you\'re not building your business. \r\n\r\nThe bottom line? There\'s not much point in taking the time to construct a new website if you don\'t have a plan to promote it.\r\n\r\nHow Do You Measure Success?\r\n\r\nThere are many metrics you can use to measure the success of your website, from bounce rate to traffic sources to keywords and conversion rate. Arguably, however, the most important is how much traffic you get. After all, if no one visits your site, the other metrics don\'t make much difference. \r\n\r\nThe amount of web traffic you should be getting depends on what kind of business you have, and how large it is. For example, B2B companies with 11 to 25 employees get an average of 269 unique visitors each week. B2C companies of the same size get 685 unique visitors.\r\n\r\nWhether your website hits that average benchmark, or does better or worse, is a function of how well you promote it, and that requires smart planning. \r\n\r\n1. Email Marketing\r\n\r\nThe success of email marketing is all about growing your contact list, segmenting it to appeal to different groups of customers, and providing valuable content to encourage recipients to stay engaged. Always link to your website in your email call to action, and encourage repeat visits to your website by sending fresh content on a regular basis.\r\n\r\n2. Personal Email Signature\r\n\r\nYou can include a link to your homepage or a specific landing page you want to promote. If the link is to your homepage, make sure it works like a landing page.\r\n\r\n3. Search Engine Optimization\r\n\r\nSEO, which will improve organic search engine rankings, is a complex process which involves optimizing your website for keywords, providing authoritative content, and increasing quality links to your site. By enhancing SEO, your website will appear near the top of search results for your specified keywords.\r\n\r\n4. Pay-Per-Click Ads\r\n\r\nCreate paid ads to appear on search engines. The most popular paid ads are through Google AdWords. You tell Google how much you\'re willing to spend and only pay when someone clicks on your ad. This is called pay-per-click advertising. Make sure that your ad links to a landing page that matches the copy in the ad (you don\'t want to advertise hiking boots and send visitors to a page featuring umbrellas). \r\n\r\n5. Social Media\r\n\r\nSocial media sites like Facebook and Twitter (with one billion users each) are a great way to promote your site. Provide links to your homepage or other website pages (depending on the nature of the content) in your social media posts and bios. \r\n\r\n6. YouTube\r\n\r\nAbout 1 billion people use YouTube every month. That fact, combined with the enormous popularity of video, makes YouTube a natural for promoting your website. Be sure to include a call to action in your video with a link back to your website, and give viewers a good reason to go there.\r\n\r\n7. Guest Blogs\r\n\r\nIdentify leading websites in your market niche and offer to write guest blogs for them. Be sure to include a link to your website in the blog post, for example, in your bio at the end of the article.\r\n\r\nIf you don\'t consider yourself much of a writer or are just getting started with content marketing, here are some content marketing basics to get you started.\r\n\r\n8. Retargeting\r\n\r\nIf you shop at Walmart online, you might notice ads for the products you just purchased, or similar Walmart products, on other websites. That\'s achieved through retargeting, a cookie-based technology that involves inserting a special code on your website. When visitors come to your site, the code attaches a cookie to that visitor\'s browser. That makes it possible to display ads for your website on other sites across the web, increasing the visibility of your site and the products and services you offer.\r\n\r\nWrap Up\r\n\r\nPromoting your website to increase web traffic and boost sales in a multi-step process that requires careful consideration, thought, and planning. \r\n\r\nThe first step in the process is finding the right domain name and choosing a host for your website. Take the first step by visiting Shawod today to set up your domain name and web hosting.\r\n\r\nThen, check back with this list to make sure you\'re promoting your website everywhere you can.\r\n'),
(3, 'The Danger of Giving Up Social Media Passwords - So Many Other Services Are Connected', 'Dan YorkSenior Manager, Content and Web StrategyRSSTwitterGoogleplusLinkedinSubscribe', 'internetsociety.org  \r\n\r\n\r\n \r\n\r\n\"What\'s the harm in giving up my Twitter password?\", you might say, \"all someone can do is see my direct messages and post a tweet from me, right?\"\r\n\r\nThink again. The reality today is that social media services are used for far more than just posting updates or photos of cats. They also act as \"identity providers\" allowing us to easily login to other sites and services. \r\n\r\nWe\'ve all seen the \"Login with Twitter\" or \"Continue with Facebook\" buttons on various sites. Or for Google or LinkedIn. These offer a tremendous convenience. You can rapidly sign into sites without having to remember yet-another-password.\r\n\r\nBut if you give your passwords to your social media accounts to someone, they could potentially\r\n(a).Impersonate you on social media accounts and post updates in your name.\r\n(b).Sign in to the comment sections of various news media sites and leave comments using your name.\r\n(c).Connect in to photo sites and see our photos, and modify or delete the photos, or post new ones in your name.\r\n(d).Sign in to e-commerce sites, view your orders and purchase items.\r\n(e).Login to video sites and see what videos you have watched, or post new ones to your account.\r\n(f).Login to your Medium account, view and change any articles you have written, add new comments as you.\r\n(g).Sign in to Goodreads, view all your books, see all the lists of what you want to read, view all your reviews and post reviews in your name.\r\n(h).Login to your Spotify account and learn all about what kind of music you like to listen to.\r\n\r\nAnd that\'s only a small number of examples.\r\n\r\nWe live in an era of highly-connected systems. And there are so many systems and services! The convenience of using our social media accounts to login is easy to understand.\r\n\r\nBut if you give someone your password to a social media account, or are required to give your social media passwords to someone, you are giving them access to so much more than just that social media service.\r\n\r\nWhat can you do?\r\n\r\n1. Don\'t give out your social media passwords!\r\n\r\n2. Understand where your social media IDs are being used. In both Twitter and Facebook you can go into your \"Settings\" and choose \"Apps\" to see where you have granted access. You can revoke access there for sites and services you no longer use.\r\n\r\n3. Think about whether you want to continue using your social media IDs in so many places. Does the convenience outweigh the issue of having so many services linked to one identity?\r\n\r\n4. Enable 2-Factor Authentication on sites that offer this, which requires a second step beyond just your password to login. These are very easy to use, often using a phone or a small and inexpensive \"dongle\" that fits on your keyring.[2] Do note that this may not help if you are required by authorities to provide your social media passwords as they may require you provide the device used for two-factor authentication.\r\n\r\n5. Use a password manager instead of using your social media ID to login to other sites,  which enables you to generate and use very strong passwords and access them all with one master password. There are many excellent free and paid options available for both computers and mobile devices, with a variety of features.\r\n\r\n6. Spread the word. Help others understand how critically important our social media passwords are.\r\n\r\nP.S. For more ideas, please see\r\n\r\n[1] Depending upon how you have configured the service to work.\r\n\r\n[2] The FIDO Alliance is a leader in this area, and a list of enabled sites and certified products is available on their site https://fidoalliance.org/adoption/overview/\r\n\r\n'),
(4, 'What the Year\'s Best Movies Can Teach Us About Small Business Success', 'Celia Shatzman', 'Official Bluehost Blog  \r\n\r\n\r\nThey\'ll make you laugh, cry, and ponder the limits of determination and strength. When it comes to movies nominated for Best Picture at the Academy Awards, there is much we can learn. And that also includes what they can teach us about small business success.\r\n\r\nThese are a few of the key lessons you can learn from this year\'s nominees.\r\n\r\nMaster Communication\r\n\r\nWe\'re not saying that you should learn how to speak to aliens like linguistics professor Louise Banks in Arrival. But there are plenty of lessons we can learn from Amy Adams\'s character without going that far. \r\n\r\nIn the sci-fi flick, she races against the clock to learn how to communicate with aliens to find out why they have landed on Earth and what they want. While your business may not be quite as high stakes, it\'s certain that learning how to convey the right message is crucial for any small biz. \r\n\r\nSimilar to Arrival, figure out what people are looking for and how you can deliver it. By keeping the lines of communication open, you\'ll be able to target the bottom line through knowing what people\'s needs and expectations are.\r\n\r\nEmbrace Equality\r\n\r\nHidden Figures tells the true story of a group of female African-American mathematicians who made incredible advancements for NASA by making the calculations that enabled astronaut John Glenn to go into orbit safely during the space race with Russia. \r\n\r\nWhile that makes them American heroes, we see them struggling with racism during the Civil Rights era, including a scene in which they must use the \"colored\" bathrooms across campus. That triggers NASA to realize they must treat their employees more equally in order to ensure progress for their space initiatives and beyond. \r\n\r\nLet that serve as a reminder that by treating all of your employees with respect no matter their gender, age, or where they come from your projects will rise when everyone is treated fairly. \r\n\r\nNever Give Up\r\n\r\nIn Lion, Saroo is a young boy living a happy but impoverished life with his family in rural India until he ends up separated from them a thousand miles away from home. He is eventually adopted by loving parents from Australia, but he always wonders what happened to his biological family. \r\n\r\nDetermined to be reunited with them, Saroo goes on an adventure to track them down. Even in the age of technology, it\'s not an easy process, and he overcomes many hurdles along the way. \r\n\r\nNext time you hit a mountain you must cross at work, channel Saroo: Think about clever solutions, since there\'s more than one way to tackle a challenge. And keep trying again and again. \r\n\r\nWhat\'s Old Is New Again\r\n\r\nThe Wizard of Oz. Singin in the Rain. West Side Story. My Fair Lady. Those are just a few classic movie musicals. While they were a staple in American cinema for decades, the genre had recently fallen out of favor until La La Land came along, putting a modern touch on an old favorite. \r\n\r\nWe\'re not saying you should burst into song and dance at your next meeting, but follow in the fancy footsteps of Ryan Gosling and Emma Stone by finding a way to put a new spin on a vintage approach. That creativity captivated audience, and it can captivate customers, too. \r\n\r\nStick to Your Values\r\n\r\nBased on a true story, Hacksaw Ridge follows Desmond T. Doss, an American army medic sent to battle in World War II. As a religious man, he\'s a conscious objector who refuses to fire a shot. \r\n\r\nInstead, he crosses enemy lines to save injured soldiers during the Battle of Okinawa and is awarded the Medal of Honor for his immense bravery and dedication to other soldiers. When you\'re surrounded by people who don\'t believe the same things as you, it can be hard to stick to your guns. But Doss illustrates the importance of listening to your gut. \r\n\r\nRunning a small business requires making many difficult decisions, and letting your moral compass guide you can help you determine what\'s right for you and your company.\r\n\r\nLet Go of Grudges\r\n\r\nWe all know the power of forgiveness, but sometimes it\'s just not that easy. That\'s something Troy Maxson, the main character in Fences, set in 1950s Pittsburgh, struggles with. By the time black people were allowed to play professional baseball in the major leagues, Maxson was too old, and he lets this grudge affect his son\'s athletic hopes. \r\n\r\nIt can be hard not to let past negatives affect the future of your business. Whether it\'s reading a bad review of your company on Yelp or dealing with a difficult customer, it\'s important to take a deep breath and not let your emotions get the best of you. Instead, reflect on what caused the unfortunate experience and figure out what you can to do prevent it from happening again. \r\n\r\nFind Your Road\r\n\r\nSet in a rough neighborhood in Miami during the drug war years, the audience watches Chiron grow up in Moonlight with little guidance, struggling to find his place in the world. As he comes of age, he must learn to carve a path for himself. \r\n\r\nSimilarly, it can be hard for new businesses to find their way. Determine a clear direction that you\'d like your company to take. By thinking that through and having a clear vision and path, it\'ll make success much more attainable.\r\n\r\nFace Your Past\r\n\r\nIn Manchester By the Sea, the life of Lee Chandler is told in a series of flashbacks and present day scenes, slowly unveiling what led him to flee from his town and his life there. \r\n\r\nDwelling on the past isn\'t always the best idea, but there are always lessons to be learned. Think of what you could have done better along the way, and how that can shape your business going forward.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `id` int(11) NOT NULL,
  `domains` text NOT NULL,
  `card_num` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `specail` text NOT NULL,
  `f_key` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_infor`
--

CREATE TABLE `client_infor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `oraganisation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_phone` varchar(255) NOT NULL,
  `home_phone` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `f_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `web` text NOT NULL,
  `logo` text NOT NULL,
  `cms` text NOT NULL,
  `f_key` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  `users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon`, `percent`, `users`) VALUES
(1, 'Covid-19', 70, 0),
(2, '2Jmail45', 55, 0);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `image` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `f_key` int(11) NOT NULL,
  `c_key` int(11) NOT NULL,
  `o_key` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `news` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `geo_countries`
--

CREATE TABLE `geo_countries` (
  `defunct` char(1) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `abv` char(2) NOT NULL COMMENT 'ISO 3661-1 alpha-2',
  `abv3` char(3) NOT NULL COMMENT 'ISO 3661-1 alpha-3',
  `code` char(3) NOT NULL COMMENT 'ISO 3661-1 numeric',
  `slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geo_countries`
--

INSERT INTO `geo_countries` (`defunct`, `name`, `abv`, `abv3`, `code`, `slug`) VALUES
('', 'Afghanistan', 'AF', 'AFG', '4', 'afghanistan'),
('', 'Aland Islands', 'AX', 'ALA', '248', 'aland-islands'),
('', 'Albania', 'AL', 'ALB', '8', 'albania'),
('', 'Algeria', 'DZ', 'DZA', '12', 'algeria'),
('', 'American Samoa', 'AS', 'ASM', '16', 'american-samoa'),
('', 'Andorra', 'AD', 'AND', '20', 'andorra'),
('', 'Angola', 'AO', 'AGO', '24', 'angola'),
('', 'Anguilla', 'AI', 'AIA', '660', 'anguilla'),
('', 'Antigua and Barbuda', 'AG', 'ATG', '28', 'antigua-and-barbuda'),
('', 'Argentina', 'AR', 'ARG', '32', 'argentina'),
('', 'Armenia', 'AM', 'ARM', '51', 'armenia'),
('', 'Aruba', 'AW', 'ABW', '533', 'aruba'),
('', 'Australia', 'AU', 'AUS', '36', 'australia'),
('', 'Austria', 'AT', 'AUT', '40', 'austria'),
('', 'Azerbaijan', 'AZ', 'AZE', '31', 'azerbaijan'),
('', 'Bahamas', 'BS', 'BHS', '44', 'bahamas'),
('', 'Bahrain', 'BH', 'BHR', '48', 'bahrain'),
('', 'Bangladesh', 'BD', 'BGD', '50', 'bangladesh'),
('', 'Barbados', 'BB', 'BRB', '52', 'barbados'),
('', 'Belarus', 'BY', 'BLR', '112', 'belarus'),
('', 'Belgium', 'BE', 'BEL', '56', 'belgium'),
('', 'Belize', 'BZ', 'BLZ', '84', 'belize'),
('', 'Benin', 'BJ', 'BEN', '204', 'benin'),
('', 'Bermuda', 'BM', 'BMU', '60', 'bermuda'),
('', 'Bhutan', 'BT', 'BTN', '64', 'bhutan'),
('', 'Bolivia', 'BO', 'BOL', '68', 'bolivia'),
('', 'Bosnia and Herzegovina', 'BA', 'BIH', '70', 'bosnia-and-herzegovina'),
('', 'Botswana', 'BW', 'BWA', '72', 'botswana'),
('', 'Brazil', 'BR', 'BRA', '76', 'brazil'),
('', 'British Virgin Islands', 'VG', 'VGB', '92', 'british-virgin-islands'),
('', 'Brunei Darussalam', 'BN', 'BRN', '96', 'brunei-darussalam'),
('', 'Bulgaria', 'BG', 'BGR', '100', 'bulgaria'),
('', 'Burkina Faso', 'BF', 'BFA', '854', 'burkina-faso'),
('', 'Burundi', 'BI', 'BDI', '108', 'burundi'),
('', 'Cambodia', 'KH', 'KHM', '116', 'cambodia'),
('', 'Cameroon', 'CM', 'CMR', '120', 'cameroon'),
('', 'Canada', 'CA', 'CAN', '124', 'canada'),
('', 'Cape Verde', 'CV', 'CPV', '132', 'cape-verde'),
('', 'Cayman Islands', 'KY', 'CYM', '136', 'cayman-islands'),
('', 'Central African Republic', 'CF', 'CAF', '140', 'central-african-republic'),
('', 'Chad', 'TD', 'TCD', '148', 'chad'),
('', 'Chile', 'CL', 'CHL', '152', 'chile'),
('', 'China', 'CN', 'CHN', '156', 'china'),
('', 'Hong Kong', 'HK', 'HKG', '344', 'hong-kong'),
('', 'Macao', 'MO', 'MAC', '446', 'macao'),
('', 'Colombia', 'CO', 'COL', '170', 'colombia'),
('', 'Comoros', 'KM', 'COM', '174', 'comoros'),
('', 'Congo', 'CG', 'COG', '178', 'congo'),
('', 'Democratic Republic of the Congo', 'CD', 'COD', '180', 'democratic-republic-of-congo'),
('', 'Cook Islands', 'CK', 'COK', '184', 'cook-islands'),
('', 'Costa Rica', 'CR', 'CRI', '188', 'costa-rica'),
('', 'Cote d\'Ivoire', 'CI', 'CIV', '384', 'cote-divoire'),
('', 'Croatia', 'HR', 'HRV', '191', 'croatia'),
('', 'Cuba', 'CU', 'CUB', '192', 'cuba'),
('', 'Cyprus', 'CY', 'CYP', '196', 'cyprus'),
('', 'Czech Republic', 'CZ', 'CZE', '203', 'czech-republic'),
('', 'North Korea', 'KP', 'PRK', '408', 'north-korea'),
('', 'Denmark', 'DK', 'DNK', '208', 'denmark'),
('', 'Djibouti', 'DJ', 'DJI', '262', 'djibouti'),
('', 'Dominica', 'DM', 'DMA', '212', 'dominica'),
('', 'Dominican Republic', 'DO', 'DOM', '214', 'dominican-republic'),
('', 'Ecuador', 'EC', 'ECU', '218', 'ecuador'),
('', 'Egypt', 'EG', 'EGY', '818', 'egypt'),
('', 'El Salvador', 'SV', 'SLV', '222', 'el-salvador'),
('', 'Equatorial Guinea', 'GQ', 'GNQ', '226', 'equatorial-guinea'),
('', 'Eritrea', 'ER', 'ERI', '232', 'eritrea'),
('', 'Estonia', 'EE', 'EST', '233', 'estonia'),
('', 'Ethiopia', 'ET', 'ETH', '231', 'ethiopia'),
('', 'Faeroe Islands', 'FO', 'FRO', '234', 'faeroe-islands'),
('', 'Falkland Islands', 'FK', 'FLK', '238', 'falkland-islands'),
('', 'Fiji', 'FJ', 'FJI', '242', 'fiji'),
('', 'Finland', 'FI', 'FIN', '246', 'finland'),
('', 'France', 'FR', 'FRA', '250', 'france'),
('', 'French Guiana', 'GF', 'GUF', '254', 'french-guiana'),
('', 'French Polynesia', 'PF', 'PYF', '258', 'french-polynesia'),
('', 'Gabon', 'GA', 'GAB', '266', 'gabon'),
('', 'Gambia', 'GM', 'GMB', '270', 'gambia'),
('', 'Georgia', 'GE', 'GEO', '268', 'georgia'),
('', 'Germany', 'DE', 'DEU', '276', 'germany'),
('', 'Ghana', 'GH', 'GHA', '288', 'ghana'),
('', 'Gibraltar', 'GI', 'GIB', '292', 'gibraltar'),
('', 'Greece', 'GR', 'GRC', '300', 'greece'),
('', 'Greenland', 'GL', 'GRL', '304', 'greenland'),
('', 'Grenada', 'GD', 'GRD', '308', 'grenada'),
('', 'Guadeloupe', 'GP', 'GLP', '312', 'guadeloupe'),
('', 'Guam', 'GU', 'GUM', '316', 'guam'),
('', 'Guatemala', 'GT', 'GTM', '320', 'guatemala'),
('', 'Guernsey', 'GG', 'GGY', '831', 'guernsey'),
('', 'Guinea', 'GN', 'GIN', '324', 'guinea'),
('', 'Guinea-Bissau', 'GW', 'GNB', '624', 'guinea-bissau'),
('', 'Guyana', 'GY', 'GUY', '328', 'guyana'),
('', 'Haiti', 'HT', 'HTI', '332', 'haiti'),
('', 'Holy See', 'VA', 'VAT', '336', 'holy-see'),
('', 'Honduras', 'HN', 'HND', '340', 'honduras'),
('', 'Hungary', 'HU', 'HUN', '348', 'hungary'),
('', 'Iceland', 'IS', 'ISL', '352', 'iceland'),
('', 'India', 'IN', 'IND', '356', 'india'),
('', 'Indonesia', 'ID', 'IDN', '360', 'indonesia'),
('', 'Iran', 'IR', 'IRN', '364', 'iran'),
('', 'Iraq', 'IQ', 'IRQ', '368', 'iraq'),
('', 'Ireland', 'IE', 'IRL', '372', 'ireland'),
('', 'Isle of Man', 'IM', 'IMN', '833', 'isle-of-man'),
('', 'Israel', 'IL', 'ISR', '376', 'israel'),
('', 'Italy', 'IT', 'ITA', '380', 'italy'),
('', 'Jamaica', 'JM', 'JAM', '388', 'jamaica'),
('', 'Japan', 'JP', 'JPN', '392', 'japan'),
('', 'Jersey', 'JE', 'JEY', '832', 'jersey'),
('', 'Jordan', 'JO', 'JOR', '400', 'jordan'),
('', 'Kazakhstan', 'KZ', 'KAZ', '398', 'kazakhstan'),
('', 'Kenya', 'KE', 'KEN', '404', 'kenya'),
('', 'Kiribati', 'KI', 'KIR', '296', 'kiribati'),
('', 'Kuwait', 'KW', 'KWT', '414', 'kuwait'),
('', 'Kyrgyzstan', 'KG', 'KGZ', '417', 'kyrgyzstan'),
('', 'Laos', 'LA', 'LAO', '418', 'laos'),
('', 'Latvia', 'LV', 'LVA', '428', 'latvia'),
('', 'Lebanon', 'LB', 'LBN', '422', 'lebanon'),
('', 'Lesotho', 'LS', 'LSO', '426', 'lesotho'),
('', 'Liberia', 'LR', 'LBR', '430', 'liberia'),
('', 'Libyan Arab Jamahiriya', 'LY', 'LBY', '434', 'libyan-arab-jamahiriya'),
('', 'Liechtenstein', 'LI', 'LIE', '438', 'liechtenstein'),
('', 'Lithuania', 'LT', 'LTU', '440', 'lithuania'),
('', 'Luxembourg', 'LU', 'LUX', '442', 'luxembourg'),
('', 'Madagascar', 'MG', 'MDG', '450', 'madagascar'),
('', 'Malawi', 'MW', 'MWI', '454', 'malawi'),
('', 'Malaysia', 'MY', 'MYS', '458', 'malaysia'),
('', 'Maldives', 'MV', 'MDV', '462', 'maldives'),
('', 'Mali', 'ML', 'MLI', '466', 'mali'),
('', 'Malta', 'MT', 'MLT', '470', 'malta'),
('', 'Marshall Islands', 'MH', 'MHL', '584', 'marshall-islands'),
('', 'Martinique', 'MQ', 'MTQ', '474', 'martinique'),
('', 'Mauritania', 'MR', 'MRT', '478', 'mauritania'),
('', 'Mauritius', 'MU', 'MUS', '480', 'mauritius'),
('', 'Mayotte', 'YT', 'MYT', '175', 'mayotte'),
('', 'Mexico', 'MX', 'MEX', '484', 'mexico'),
('', 'Micronesia', 'FM', 'FSM', '583', 'micronesia'),
('', 'Monaco', 'MC', 'MCO', '492', 'monaco'),
('', 'Mongolia', 'MN', 'MNG', '496', 'mongolia'),
('', 'Montenegro', 'ME', 'MNE', '499', 'montenegro'),
('', 'Montserrat', 'MS', 'MSR', '500', 'montserrat'),
('', 'Morocco', 'MA', 'MAR', '504', 'morocco'),
('', 'Mozambique', 'MZ', 'MOZ', '508', 'mozambique'),
('', 'Myanmar', 'MM', 'MMR', '104', 'myanmar'),
('', 'Namibia', 'NA', 'NAM', '516', 'namibia'),
('', 'Nauru', 'NR', 'NRU', '520', 'nauru'),
('', 'Nepal', 'NP', 'NPL', '524', 'nepal'),
('', 'Netherlands', 'NL', 'NLD', '528', 'netherlands'),
('', 'Netherlands Antilles', 'AN', 'ANT', '530', 'netherlands-antilles'),
('', 'New Caledonia', 'NC', 'NCL', '540', 'new-caledonia'),
('', 'New Zealand', 'NZ', 'NZL', '554', 'new-zealand'),
('', 'Nicaragua', 'NI', 'NIC', '558', 'nicaragua'),
('', 'Niger', 'NE', 'NER', '562', 'niger'),
('', 'Nigeria', 'NG', 'NGA', '566', 'nigeria'),
('', 'Niue', 'NU', 'NIU', '570', 'niue'),
('', 'Norfolk Island', 'NF', 'NFK', '574', 'norfolk-island'),
('', 'Northern Mariana Islands', 'MP', 'MNP', '580', 'northern-mariana-islands'),
('', 'Norway', 'NO', 'NOR', '578', 'norway'),
('', 'Palestine', 'PS', 'PSE', '275', 'palestine'),
('', 'Oman', 'OM', 'OMN', '512', 'oman'),
('', 'Pakistan', 'PK', 'PAK', '586', 'pakistan'),
('', 'Palau', 'PW', 'PLW', '585', 'palau'),
('', 'Panama', 'PA', 'PAN', '591', 'panama'),
('', 'Papua New Guinea', 'PG', 'PNG', '598', 'papua-new-guinea'),
('', 'Paraguay', 'PY', 'PRY', '600', 'paraguay'),
('', 'Peru', 'PE', 'PER', '604', 'peru'),
('', 'Philippines', 'PH', 'PHL', '608', 'philippines'),
('', 'Pitcairn', 'PN', 'PCN', '612', 'pitcairn'),
('', 'Poland', 'PL', 'POL', '616', 'poland'),
('', 'Portugal', 'PT', 'PRT', '620', 'portugal'),
('', 'Puerto Rico', 'PR', 'PRI', '630', 'puerto-rico'),
('', 'Qatar', 'QA', 'QAT', '634', 'qatar'),
('', 'South Korea', 'KR', 'KOR', '410', 'south-korea'),
('', 'Moldova', 'MD', 'MDA', '498', 'moldova'),
('', 'Reunion', 'RE', 'REU', '638', 'reunion'),
('', 'Romania', 'RO', 'ROU', '642', 'romania'),
('', 'Russian Federation', 'RU', 'RUS', '643', 'russian-federation'),
('', 'Rwanda', 'RW', 'RWA', '646', 'rwanda'),
('', 'Saint-Barthelemy', 'BL', 'BLM', '652', 'saint-barthelemy'),
('', 'Saint Helena', 'SH', 'SHN', '654', 'saint-helena'),
('', 'Saint Kitts and Nevis', 'KN', 'KNA', '659', 'saint-kitts-and-nevis'),
('', 'Saint Lucia', 'LC', 'LCA', '662', 'saint-lucia'),
('', 'Saint-Martin', 'MF', 'MAF', '663', 'saint-martin'),
('', 'Saint Pierre and Miquelon', 'PM', 'SPM', '666', 'saint-pierre-and-miquelon'),
('', 'Saint Vincent and the Grenadines', 'VC', 'VCT', '670', 'saint-vincent-and-grenadines'),
('', 'Samoa', 'WS', 'WSM', '882', 'samoa'),
('', 'San Marino', 'SM', 'SMR', '674', 'san-marino'),
('', 'Sao Tome and Principe', 'ST', 'STP', '678', 'sao-tome-and-principe'),
('', 'Saudi Arabia', 'SA', 'SAU', '682', 'saudi-arabia'),
('', 'Senegal', 'SN', 'SEN', '686', 'senegal'),
('', 'Serbia', 'RS', 'SRB', '688', 'serbia'),
('', 'Seychelles', 'SC', 'SYC', '690', 'seychelles'),
('', 'Sierra Leone', 'SL', 'SLE', '694', 'sierra-leone'),
('', 'Singapore', 'SG', 'SGP', '702', 'singapore'),
('', 'Slovakia', 'SK', 'SVK', '703', 'slovakia'),
('', 'Slovenia', 'SI', 'SVN', '705', 'slovenia'),
('', 'Solomon Islands', 'SB', 'SLB', '90', 'solomon-islands'),
('', 'Somalia', 'SO', 'SOM', '706', 'somalia'),
('', 'South Africa', 'ZA', 'ZAF', '710', 'south-africa'),
('', 'Spain', 'ES', 'ESP', '724', 'spain'),
('', 'Sri Lanka', 'LK', 'LKA', '144', 'sri-lanka'),
('', 'Sudan', 'SD', 'SDN', '729', 'sudan'),
('', 'Suriname', 'SR', 'SUR', '740', 'suriname'),
('', 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', '744', 'svalbard-and-jan-mayen-islands'),
('', 'Swaziland', 'SZ', 'SWZ', '748', 'swaziland'),
('', 'Sweden', 'SE', 'SWE', '752', 'sweden'),
('', 'Switzerland', 'CH', 'CHE', '756', 'switzerland'),
('', 'Syrian Arab Republic', 'SY', 'SYR', '760', 'syrian-arab-republic'),
('', 'Tajikistan', 'TJ', 'TJK', '762', 'tajikistan'),
('', 'Thailand', 'TH', 'THA', '764', 'thailand'),
('', 'Macedonia', 'MK', 'MKD', '807', 'macedonia'),
('', 'Timor-Leste', 'TP', 'TLS', '626', 'timor-leste'),
('', 'Togo', 'TG', 'TGO', '768', 'togo'),
('', 'Tokelau', 'TK', 'TKL', '772', 'tokelau'),
('', 'Tonga', 'TO', 'TON', '776', 'tonga'),
('', 'Trinidad and Tobago', 'TT', 'TTO', '780', 'trinidad-and-tobago'),
('', 'Tunisia', 'TN', 'TUN', '788', 'tunisia'),
('', 'Turkey', 'TR', 'TUR', '792', 'turkey'),
('', 'Turkmenistan', 'TM', 'TKM', '795', 'turkmenistan'),
('', 'Turks and Caicos Islands', 'TC', 'TCA', '796', 'turks-and-caicos-islands'),
('', 'Tuvalu', 'TV', 'TUV', '798', 'tuvalu'),
('', 'Uganda', 'UG', 'UGA', '800', 'uganda'),
('', 'Ukraine', 'UA', 'UKR', '804', 'ukraine'),
('', 'United Arab Emirates', 'AE', 'ARE', '784', 'united-arab-emirates'),
('', 'United Kingdom', 'UK', 'GBR', '826', 'united-kingdom'),
('', 'Tanzania', 'TZ', 'TZA', '834', 'tanzania'),
('', 'United States', 'US', 'USA', '840', 'united-states'),
('', 'U.S. Virgin Islands', 'VI', 'VIR', '850', 'us-virgin-islands'),
('', 'Uruguay', 'UY', 'URY', '858', 'uruguay'),
('', 'Uzbekistan', 'UZ', 'UZB', '860', 'uzbekistan'),
('', 'Vanuatu', 'VU', 'VUT', '548', 'vanuatu'),
('', 'Venezuela', 'VE', 'VEN', '862', 'venezuela'),
('', 'Viet Nam', 'VN', 'VNM', '704', 'viet-nam'),
('', 'Wallis and Futuna Islands', 'WF', 'WLF', '876', 'wallis-and-futuna-islands'),
('', 'Western Sahara', 'EH', 'ESH', '732', 'western-sahara'),
('', 'Yemen', 'YE', 'YEM', '887', 'yemen'),
('', 'Zambia', 'ZM', 'ZMB', '894', 'zambia'),
('', 'Zimbabwe', 'ZW', 'ZWE', '716', 'zimbabwe'),
('', 'South Sudan', 'SS', 'SSD', '728', 'south-sudan');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `f_key` int(11) NOT NULL,
  `c_key` int(11) NOT NULL,
  `o_key` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosting_payment`
--

CREATE TABLE `hosting_payment` (
  `id` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `amount` double NOT NULL,
  `f_key` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `f_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `f_key`) VALUES
(1, '1194603', '675932a67c18e0cca7f6286146f3f195', 7),
(2, '1315718', '222db6e2b84d73e24f13f55743f3a33f', 8);

-- --------------------------------------------------------

--
-- Table structure for table `new_services`
--

CREATE TABLE `new_services` (
  `id` int(11) NOT NULL,
  `items` text NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `reference` varchar(255) NOT NULL,
  `f_key` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `f_key` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `not_approved`
--

CREATE TABLE `not_approved` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `discription` text NOT NULL,
  `package` varchar(50) NOT NULL,
  `features` text NOT NULL,
  `referance` varchar(80) NOT NULL,
  `id_client` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `approval` int(11) NOT NULL,
  `amount` double NOT NULL,
  `deposit` double NOT NULL,
  `project_end` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `f_key` int(11) NOT NULL,
  `c_key` int(11) NOT NULL,
  `o_key` int(11) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `rate`, `ip`, `time`) VALUES
(1, 'Super Impressed', '127.0.0.1', '2020-03-03 14:50:23'),
(2, 'Super Impressed', '172.69.114.41', '2020-06-27 22:59:52'),
(3, 'Satisfactory', '172.69.114.69', '2020-07-01 19:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `f_key` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `website` text NOT NULL,
  `hosting` text NOT NULL,
  `domain` text NOT NULL,
  `ssl_certificate` text NOT NULL,
  `f_key` int(11) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_emails`
--

CREATE TABLE `user_emails` (
  `id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `no_emails` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_status` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_payment`
--

CREATE TABLE `web_payment` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `expiry date` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `stage` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `f_key` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `transaction_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_infor`
--
ALTER TABLE `client_infor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosting_payment`
--
ALTER TABLE `hosting_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_services`
--
ALTER TABLE `new_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `not_approved`
--
ALTER TABLE `not_approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_emails`
--
ALTER TABLE `user_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_payment`
--
ALTER TABLE `web_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cancellation`
--
ALTER TABLE `cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_infor`
--
ALTER TABLE `client_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hosting_payment`
--
ALTER TABLE `hosting_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_services`
--
ALTER TABLE `new_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `not_approved`
--
ALTER TABLE `not_approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_emails`
--
ALTER TABLE `user_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_payment`
--
ALTER TABLE `web_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
