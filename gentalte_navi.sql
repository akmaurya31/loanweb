-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2024 at 08:44 PM
-- Server version: 5.7.40
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gentalte_navi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `banner_image` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `content`, `created_by`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(2, '<h1>Get Approval in 3 <span class=\"text-warning\">minutes </span></h1>', 'Submit the form and one of our Credit Counselors will get in touch with you for the loan quotation. Scroll down to see the complete list of loan options and offerings', 1, '2024-03-11banner.jpg', 'Y', '2024-02-25 01:48:31', '2024-03-11 03:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorydetails`
--

CREATE TABLE `categorydetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `whatsappnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadharno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pancard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankaccountno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankifsccode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loanamoun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loantype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loantenure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_emp_id` int(11) DEFAULT NULL,
  `assign_loan_id` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helth_insorence_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `created_at`, `updated_at`, `whatsappnumber`, `aadharno`, `pancard`, `bankaccountno`, `bankname`, `bankifsccode`, `loanamoun`, `city`, `pincode`, `state`, `loantype`, `itr`, `loantenure`, `vehicle1`, `assign_emp_id`, `assign_loan_id`, `created_by`, `address`, `processing_free`, `helth_insorence_free`) VALUES
(17, 'Gori Churaial', '8565987453', 'gori@gmail.com', '2024-03-16 09:11:49', '2024-03-17 02:22:23', '8565987453', 'A009024HYI58', 'PMYTT5896P', '56233854587', 'Kotak Mindra Abnk', 'KKKO5698', '50000', 'Bihar', '203265', 'Bihar', 'Personal Loan', 'Yes', '2', 'Bike', NULL, 3, 1, NULL, NULL, NULL),
(18, 'Dhakshan D', '7760078498', 'dhakshand@gmail.com', '2024-03-16 09:24:29', '2024-03-17 02:19:51', '7760078498', '368142896266', 'FAHPD4170E', '039210100025732', 'Union Bank of india', 'UBIN0803928', '200000', 'Bangalore', '560060', 'Karnataka', 'Personal Loan', 'No', '3', 'Bike', NULL, 2, 1, NULL, NULL, NULL),
(19, 'Aditya Singh', '8981238843', 'onlinenavifinance@gmail.com', '2024-03-17 02:27:07', '2024-03-17 02:29:19', '8981238843', '243687436843', 'DTYRY4757H', '48643787564', 'SBI', 'Sbin0000081', '200000', 'Gurugaom', '122002', 'Haryana', 'Personal Loan', 'Yes', '2', 'Bike', NULL, 2, 1, NULL, NULL, NULL),
(20, 'Nagarathnamma', '9108363699', 'yallappasathwik@gmail.com', '2024-03-17 06:00:32', '2024-03-17 06:00:32', '9108363699', '438086083795', 'CRBPN9641J', '42522121522', 'SBI', 'SBIN0040102', '50000', 'Mayasandra', '40102', 'Karnataka', 'Personal Loan', 'Yes', '2', 'Bike', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `bg_image` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallerydetails`
--

CREATE TABLE `gallerydetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menudetails`
--

CREATE TABLE `menudetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menudetails`
--

INSERT INTO `menudetails` (`id`, `heading`, `content`, `image`, `menu_id`, `created_by`, `status`, `created_at`, `updated_at`) VALUES
(17, 'About Navi Loanfinserv', '<p>Navi Loanfinserv is a platform that facilitates loan transactions between borrowers and personal loan providers such as NBFCs/Banks. All loan app lications are approved and sanctioned by the NBFCs/Banks registered with the RBI. All details are clearly stated upfront during the Loan application.</p>\r\n\r\n<p>Navi Loanfinserv takes pride in being inclusive as an Instant Loan provider, Users can apply for Personal Loans up to ₹ 5 Lakhs as per the requ irement. The documentation needed is minimal and the entire process starting from registration to disbursement takes an average of 10 minutes. The application process is completely online and on approval, the funds are immediately transferred to the bank account of the applicant. There are a number of unique Loan Offers available with simple repayment plans.</p>', '2024-03-11loan.jpg', 25, 1, 'Y', '2024-03-04 00:32:28', '2024-03-16 04:25:01'),
(18, 'Personal Loan for Self-Employed', '<p>Personal loans for business owners to fulfill credit needs of ₹10,000 to ₹2 Lakhs with repayment tenures ranging between 4 to 24 months.</p>', '2024-03-04SPACE-PLANNING.jpg', 26, 1, 'Y', '2024-03-04 00:33:13', '2024-03-11 04:18:42'),
(19, 'Personal Loan', '<p>Do you want to buy a bicycle, that all new smartphone or even an awesome laptop? This credit option will suit you best</p>', '2024-03-11p.jpg', 27, 1, 'Y', '2024-03-04 00:37:38', '2024-03-11 05:11:18'),
(20, 'Vehicle Loan', '<p>It&#39;s time to change that old rust bucket you&#39;re currently driving. Apply for a vehicle loan and enjoy the car of your dreams</p>', '2024-03-11t (1).jpg', 27, 1, 'Y', '2024-03-11 04:17:09', '2024-03-11 05:14:33'),
(21, 'House Loan', '<p>The family can&#39;t fit anymore in that one bedroom flat? Change their lives with a nice new and modern home</p>', '2024-03-11h.jpg', 27, 1, 'Y', '2024-03-11 04:17:23', '2024-03-11 05:14:41'),
(22, 'Travelling Loan', '<p>Ready to see the world? Pack your bags and go travelling to any destination you desire using our travelling loan</p>', '2024-03-11tra.jpg', 27, 1, 'Y', '2024-03-11 04:17:37', '2024-03-11 05:15:16'),
(23, 'StartUp Loan', '<p>Nowadays everyone has a business idea but doesn&#39;t have the resources to make it a reality. We&#39;re prepared to fix that</p>', '2024-03-11st.jpg', 27, 1, 'Y', '2024-03-11 04:17:49', '2024-03-11 05:17:55'),
(24, 'Student Loan', '<p>Have you decided to invest in your education and can&#39;t afford the costs? Use the student loan for a better future</p>', '2024-03-11s.jpg', 27, 1, 'Y', '2024-03-11 04:18:03', '2024-03-11 05:20:00'),
(25, 'Personal Loan for Salaried', '<p>Quick personal loans for salaried individuals with repayment terms between 4 to 24 months for a loan amount of ₹10,000 to ₹5 Lakhs.</p>', NULL, 26, 1, 'Y', '2024-03-11 04:18:54', '2024-03-11 04:18:54'),
(26, 'Flexi Personal Loan', '<p>Instant personal loans for urgent credit between ₹3,000 to ₹66,000 with flexible tenures between 3 to 10 months.</p>', NULL, 26, 1, 'Y', '2024-03-11 04:19:10', '2024-03-11 04:19:10'),
(27, 'Purchase On EMI', '<p>Make purchases on EMI up to ₹2 Lakhs for seamless online/offline shopping with more than 2 Lakh+ merchant partners and repayment periods of up to 18 months.</p>', NULL, 26, 1, 'Y', '2024-03-11 04:19:25', '2024-03-11 04:19:25'),
(28, 'Lower Interest Rates', '<p>Get loans for multiple purposes at lower interest rates to suit your needs</p>', '2024-03-113.png', 24, 1, 'Y', '2024-03-11 04:22:56', '2024-03-11 04:22:56'),
(29, 'Fast Processing and Disbursal', '<p>Apply online, check your eligibility and get money directly in your bank in 10 minutes</p>', '2024-03-114.png', 24, 1, 'Y', '2024-03-11 04:23:15', '2024-03-11 04:23:15'),
(30, 'Easy Repayment Options', '<p>Repay the loan amount in easy EMI with flexible tenure options</p>', '2024-03-115.png', 24, 1, 'Y', '2024-03-11 04:23:32', '2024-03-11 04:23:32'),
(31, '100% Paperless', '<p>No paperwork or physical documentation is required, and you can apply and get a personal loan completely online.</p>', '2024-03-116.png', 24, 1, 'Y', '2024-03-11 04:23:51', '2024-03-11 04:23:51'),
(32, 'Safe, Secure and Transparent', '<p>Our loan application process is fully secured and safe and there are no hidden charges.</p>', '2024-03-117.png', 24, 1, 'Y', '2024-03-11 04:24:10', '2024-03-11 04:24:10'),
(33, 'Collateral Free', '<p>No collateral is required to apply for our personal loans.</p>', '2024-03-118.png', 24, 1, 'Y', '2024-03-11 04:24:26', '2024-03-11 04:24:26'),
(34, 'Business Loan', '<p>Ready to see the world? Pack your bags and go travelling to any destination you desire using our travelling loan</p>', '2024-03-11b.jpg', 27, 1, 'Y', '2024-03-11 05:21:56', '2024-03-11 05:21:56'),
(35, 'Terms and Conditions', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:52:35', '2024-03-11 05:52:35'),
(36, 'Privacy Policy', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:52:47', '2024-03-11 05:52:47'),
(37, 'Grievance Redressal', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:53:05', '2024-03-11 05:53:05'),
(38, 'Corporate Social Responsibility Policy', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:53:14', '2024-03-11 05:53:14'),
(39, 'Security Centre', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:53:23', '2024-03-11 05:53:23'),
(40, 'Corporate Information', NULL, NULL, 28, 1, 'Y', '2024-03-11 05:53:32', '2024-03-11 05:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu_modals`
--

CREATE TABLE `menu_modals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `bg_image` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_modals`
--

INSERT INTO `menu_modals` (`id`, `heading`, `content`, `created_by`, `bg_image`, `status`, `created_at`, `updated_at`) VALUES
(24, 'Why choose Navi Loanfinserv', NULL, 1, '2024-03-04s.jpg', 'Y', '2024-03-04 00:27:37', '2024-03-16 04:23:16'),
(25, 'About Us', NULL, 1, NULL, 'Y', '2024-03-04 00:31:44', '2024-03-11 04:20:38'),
(26, 'What We Offer?', NULL, 1, NULL, 'Y', '2024-03-04 00:32:58', '2024-03-11 04:18:24'),
(27, 'Loan Options', NULL, 1, NULL, 'Y', '2024-03-04 00:35:18', '2024-03-11 04:16:19'),
(28, 'LEGAL', NULL, 1, NULL, 'Y', '2024-03-11 05:52:07', '2024-03-11 05:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_15_122452_create_categories_table', 2),
(7, '2024_02_24_051838_create_banners_table', 3),
(8, '2024_02_24_052211_create_galleries_table', 3),
(9, '2024_02_24_052402_create_testimonials_table', 3),
(10, '2024_02_24_052634_create_contacts_table', 3),
(11, '2024_02_24_052824_create_menu_modals_table', 3),
(12, '2024_02_24_053055_create_news_modals_table', 3),
(13, '2024_02_26_043344_create_menudetails_table', 4),
(14, '2024_02_26_043417_create_categorydetails_table', 4),
(15, '2024_02_26_043439_create_gallerydetails_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_modals`
--

CREATE TABLE `news_modals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `bg_image` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('prashantpatel2105@gmail.com', 'qJ2TO8yIB1j5a2NJYsQAaLYq2HRFYjVFJmTS2oNETzuZ3I7EGJIyyv5a9sJe', '2024-02-14 07:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `user_image` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profile`, `content`, `created_by`, `user_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Rohan Gupta', 'Manager', 'Ultraurban is one of the best personal loan apps that I have come across. The thing I like about their service is that it is extremely fast. When I applied for a loan on this platform, the amount was credited into my account in just 10-15 minutes! This, I think, is of great help because time is very crucial in any emergency. We all need a quick and convenient means to online loans and KreditBee provides just that. Since the entire borrowing process is on the app, everything happens on your phone itself. You don’t even need to step out anywhere.', 1, '2024-03-1124.jpg', 'Y', '2024-03-11 04:00:09', '2024-03-11 04:00:09'),
(5, 'Rohit Sharma', 'CEO', 'Ultraurban is one of the best personal loan apps that I have come across. The thing I like about their service is that it is extremely fast. When I applied for a loan on this platform, the amount was credited into my account in just 10-15 minutes! This, I think, is of great help because time is very crucial in any emergency. We all need a quick and convenient means to online loans and KreditBee provides just that. Since the entire borrowing process is on the app, everything happens on your phone itself. You don’t even need to step out anywhere.', 1, '2024-03-1124.jpg', 'Y', '2024-03-11 04:00:55', '2024-03-11 04:00:55'),
(6, 'Minakshi lekhi', 'Student', 'Thanks to Ultraurban, I could easily get a loan when I needed one. The loan application process is very simple and easy to understand. All I had to do was download the app from the Playstore, create my profile,  and  upload  the  required  documents.  That’s  all!  Once  my  loan  application  got  approved,  I provided my bank account details. I received the funds directly into my bank account, and could take care of all my needs easily. The best part is that it is all online, so I could do all of this sitting at home.', 1, '2024-03-1124.jpg', 'Y', '2024-03-11 04:01:38', '2024-03-11 04:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_Admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_by` int(11) DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_insurance_free` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_pay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annualInterestRate` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `email_verified_at`, `password`, `is_Admin`, `remember_token`, `created_at`, `updated_at`, `mobile`, `user_images`, `status`, `created_by`, `facebook`, `linkedin`, `instagram`, `youtube`, `processing_free`, `health_insurance_free`, `bank_name`, `ifsc`, `account`, `holder_name`, `google_pay`, `website`, `bank_address`, `annualInterestRate`) VALUES
(1, 'Navi loanfinserv', 'onlinenavifinance@gmail.com', 'Navi Finserv Limited New No. 83/B, 2nd Floor,opp. Saraswathipuram Mysore KA 570009 INDIA', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1', NULL, '2024-02-12 03:57:06', '2024-03-17 02:17:37', '8981238843', '2024-03-16logo.png', 'Y', NULL, 'Navi Finserv Limited', 'www.navi.com', 'www.Instagram.com', 'Navi', '4700', '8400', 'Kotak Mahendra Bank', 'KKBK0005033', '0048460033', 'Navi Finserv Limited', '6289413696', 'www.testdemo.com', NULL, '6.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorydetails`
--
ALTER TABLE `categorydetails`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerydetails`
--
ALTER TABLE `gallerydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menudetails`
--
ALTER TABLE `menudetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_modals`
--
ALTER TABLE `menu_modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_modals`
--
ALTER TABLE `news_modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorydetails`
--
ALTER TABLE `categorydetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallerydetails`
--
ALTER TABLE `gallerydetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menudetails`
--
ALTER TABLE `menudetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `menu_modals`
--
ALTER TABLE `menu_modals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news_modals`
--
ALTER TABLE `news_modals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
