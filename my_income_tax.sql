-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 10:55 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_income_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) DEFAULT NULL,
  `admin_id` varchar(255) NOT NULL,
  `NID` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `basicinformation`
--

CREATE TABLE `basicinformation` (
  `TIN` varchar(255) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `section82BB` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `old_tin` varchar(255) DEFAULT NULL,
  `circle` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `resident_status` varchar(255) DEFAULT NULL,
  `part10` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `income_start_year` date DEFAULT NULL,
  `income_end_year` date DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_tin` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `bid` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` varchar(255) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `interest_on_secuirity` int(11) DEFAULT NULL,
  `house_property` int(11) DEFAULT NULL,
  `agriculture` int(11) DEFAULT NULL,
  `business` int(11) DEFAULT NULL,
  `capital` int(11) DEFAULT NULL,
  `other_source` int(11) DEFAULT NULL,
  `shares` int(11) DEFAULT NULL,
  `spouse` int(11) DEFAULT NULL,
  `foreigns` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule24a`
--

CREATE TABLE `schedule24a` (
  `id24a` int(11) NOT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `basic_payA` int(11) DEFAULT NULL,
  `basic_payB` int(11) DEFAULT NULL,
  `basic_payC` int(11) DEFAULT NULL,
  `special_payA` int(11) DEFAULT NULL,
  `special_payB` int(11) DEFAULT NULL,
  `special_payC` int(11) DEFAULT NULL,
  `arrear_payA` int(11) DEFAULT NULL,
  `arrear_payB` int(11) DEFAULT NULL,
  `arrear_payC` int(11) DEFAULT NULL,
  `dearness_allowanceA` int(11) DEFAULT NULL,
  `dearness_allowanceB` int(11) DEFAULT NULL,
  `dearness_allowanceC` int(11) DEFAULT NULL,
  `house_rent_allowanceA` int(11) DEFAULT NULL,
  `house_rent_allowanceB` int(11) DEFAULT NULL,
  `house_rent_allowanceC` int(11) DEFAULT NULL,
  `medical_allowanceA` int(11) DEFAULT NULL,
  `medical_allowanceB` int(11) DEFAULT NULL,
  `medical_allowanceC` int(11) DEFAULT NULL,
  `conveyance_allowanceA` int(11) DEFAULT NULL,
  `conveyance_allowanceB` int(11) DEFAULT NULL,
  `conveyance_allowanceC` int(11) DEFAULT NULL,
  `festival_allowanceA` int(11) DEFAULT NULL,
  `festival_allowanceB` int(11) DEFAULT NULL,
  `festival_allowanceC` int(11) DEFAULT NULL,
  `allowance_support_staffA` int(11) DEFAULT NULL,
  `allowance_support_staffB` int(11) DEFAULT NULL,
  `allowance_support_staffC` int(11) DEFAULT NULL,
  `leave_allowanceA` int(11) DEFAULT NULL,
  `leave_allowanceB` int(11) DEFAULT NULL,
  `leave_allowanceC` int(11) DEFAULT NULL,
  `honorarium_reward_FeeA` int(11) DEFAULT NULL,
  `honorarium_reward_FeeB` int(11) DEFAULT NULL,
  `honorarium_reward_FeeC` int(11) DEFAULT NULL,
  `overtime_allowanceA` int(11) DEFAULT NULL,
  `overtime_allowanceB` int(11) DEFAULT NULL,
  `overtime_allowanceC` int(11) DEFAULT NULL,
  `bonus_exgratiaA` int(11) DEFAULT NULL,
  `bonus_exgratiaB` int(11) DEFAULT NULL,
  `bonus_exgratiaC` int(11) DEFAULT NULL,
  `other_allowanceA` int(11) DEFAULT NULL,
  `other_allowanceB` int(11) DEFAULT NULL,
  `other_allowanceC` int(11) DEFAULT NULL,
  `employer_contribution_recognized_provident_fundA` int(11) DEFAULT NULL,
  `employer_contribution_recognized_provident_fundB` int(11) DEFAULT NULL,
  `employer_contribution_recognized_provident_fundC` int(11) DEFAULT NULL,
  `interest_accrued_recognized_provident_fundA` int(11) DEFAULT NULL,
  `interest_accrued_recognized_provident_fundB` int(11) DEFAULT NULL,
  `interest_accrued_recognized_provident_fundC` int(11) DEFAULT NULL,
  `deemed_income_transport_facilityA` int(11) DEFAULT NULL,
  `deemed_income_transport_facilityB` int(11) DEFAULT NULL,
  `deemed_income_transport_facilityC` int(11) DEFAULT NULL,
  `deemed_income_free_furnished_unfurnised_accommodationA` int(11) DEFAULT NULL,
  `deemed_income_free_furnished_unfurnished_accommodationB` int(11) DEFAULT NULL,
  `deemed_income_free_furnished_unfurnished_accommodationC` int(11) DEFAULT NULL,
  `otherA` int(11) DEFAULT NULL,
  `otherB` int(11) DEFAULT NULL,
  `otherC` int(11) DEFAULT NULL,
  `totalA` int(11) DEFAULT NULL,
  `totalB` int(11) DEFAULT NULL,
  `totalC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule24b`
--

CREATE TABLE `schedule24b` (
  `id24b` int(11) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `address_property_3A` varchar(255) DEFAULT NULL,
  `total_area_3B` varchar(255) DEFAULT NULL,
  `share_asessee_3C` varchar(255) DEFAULT NULL,
  `annual_value` int(11) DEFAULT NULL,
  `deductions` int(11) DEFAULT NULL,
  `repair_5A` int(11) DEFAULT NULL,
  `local_5B` int(11) DEFAULT NULL,
  `land_5C` int(11) DEFAULT NULL,
  `interest_5D` int(11) DEFAULT NULL,
  `insurance_5E` int(11) DEFAULT NULL,
  `vacancy_5F` int(11) DEFAULT NULL,
  `other_5G` int(11) DEFAULT NULL,
  `income_house_property` int(11) DEFAULT NULL,
  `share_income` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schudule24c`
--

CREATE TABLE `schudule24c` (
  `id24c` int(11) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `type_main_business_profession` varchar(255) DEFAULT NULL,
  `name_business_profession` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sales_turnover_receipts` int(11) DEFAULT NULL,
  `gross_profit` int(11) DEFAULT NULL,
  `general_administrative_selling_other_expenses` int(11) DEFAULT NULL,
  `net_profit9` int(11) DEFAULT NULL,
  `cash_hand_bank` int(11) DEFAULT NULL,
  `inventories` int(11) DEFAULT NULL,
  `fixed_assets` int(11) DEFAULT NULL,
  `other_assests` int(11) DEFAULT NULL,
  `total_assests` int(11) DEFAULT NULL,
  `opening_capital` int(11) DEFAULT NULL,
  `net_profit16` int(11) DEFAULT NULL,
  `withdrawals` int(11) DEFAULT NULL,
  `closing_capital` int(11) DEFAULT NULL,
  `liabilities` int(11) DEFAULT NULL,
  `total_capital_liabilities` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schudule24d`
--

CREATE TABLE `schudule24d` (
  `id24d` int(11) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `life_insu` int(11) DEFAULT NULL,
  `deposit_pension` int(11) DEFAULT NULL,
  `approved_savings` int(11) DEFAULT NULL,
  `approved_debenture` int(11) DEFAULT NULL,
  `provident_fund` int(11) DEFAULT NULL,
  `self_employers_contribution` int(11) DEFAULT NULL,
  `super_annuation_fund` int(11) DEFAULT NULL,
  `benevolentFu_groupIn` int(11) DEFAULT NULL,
  `zakat_fund` int(11) DEFAULT NULL,
  `others` int(11) DEFAULT NULL,
  `total_allowable_invest_contribution` int(11) DEFAULT NULL,
  `rebate_14A` int(11) DEFAULT NULL,
  `rebate_14B` int(11) DEFAULT NULL,
  `rebate_14C` int(11) DEFAULT NULL,
  `eligible_rebate` int(11) DEFAULT NULL,
  `amount_tax_rebate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `gross_before_rebate` int(11) DEFAULT NULL,
  `rebate` int(11) DEFAULT NULL,
  `net_after_rebate` int(11) DEFAULT NULL,
  `minimum` int(11) DEFAULT NULL,
  `net_wealth_surcharge` int(11) DEFAULT NULL,
  `interest_under_ordinance` int(11) DEFAULT NULL,
  `total_payable` int(11) DEFAULT NULL,
  `deducted_or_collected` int(11) DEFAULT NULL,
  `advance_paid` int(11) DEFAULT NULL,
  `adjustment_refund` int(11) DEFAULT NULL,
  `amount_paid_return` int(11) DEFAULT NULL,
  `total_paid` int(11) DEFAULT NULL,
  `deficit_or_excess` int(11) DEFAULT NULL,
  `exempted_income` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `NID` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `veri_id` int(11) NOT NULL,
  `TIN` varchar(255) DEFAULT NULL,
  `part49` varchar(255) DEFAULT NULL,
  `part50` varchar(255) DEFAULT NULL,
  `schedules` varchar(255) DEFAULT NULL,
  `statement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `basicinformation`
--
ALTER TABLE `basicinformation`
  ADD PRIMARY KEY (`TIN`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `schedule24a`
--
ALTER TABLE `schedule24a`
  ADD PRIMARY KEY (`id24a`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `schedule24b`
--
ALTER TABLE `schedule24b`
  ADD PRIMARY KEY (`id24b`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `schudule24c`
--
ALTER TABLE `schudule24c`
  ADD PRIMARY KEY (`id24c`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `schudule24d`
--
ALTER TABLE `schudule24d`
  ADD PRIMARY KEY (`id24d`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`),
  ADD KEY `TIN` (`TIN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`veri_id`),
  ADD KEY `TIN` (`TIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule24a`
--
ALTER TABLE `schedule24a`
  MODIFY `id24a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule24b`
--
ALTER TABLE `schedule24b`
  MODIFY `id24b` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schudule24c`
--
ALTER TABLE `schudule24c`
  MODIFY `id24c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schudule24d`
--
ALTER TABLE `schudule24d`
  MODIFY `id24d` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `veri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basicinformation`
--
ALTER TABLE `basicinformation`
  ADD CONSTRAINT `basicinformation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `schedule24a`
--
ALTER TABLE `schedule24a`
  ADD CONSTRAINT `schedule24a_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `schedule24b`
--
ALTER TABLE `schedule24b`
  ADD CONSTRAINT `schedule24b_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `schudule24c`
--
ALTER TABLE `schudule24c`
  ADD CONSTRAINT `schudule24c_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `schudule24d`
--
ALTER TABLE `schudule24d`
  ADD CONSTRAINT `schudule24d_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `tax`
--
ALTER TABLE `tax`
  ADD CONSTRAINT `tax_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `verification_ibfk_1` FOREIGN KEY (`TIN`) REFERENCES `basicinformation` (`TIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
