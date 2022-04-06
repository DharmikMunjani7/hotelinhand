-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2019 at 08:10 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `AdminId` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`AdminId`, `UserName`, `Pass`) VALUES
(1, 'maulik', 'maulik');

-- --------------------------------------------------------

--
-- Table structure for table `bill_tbl`
--

CREATE TABLE `bill_tbl` (
  `BillId` int(11) NOT NULL,
  `RoomCartId` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `DateTime` date NOT NULL,
  `Type` int(11) NOT NULL,
  `ServiceTax` int(11) NOT NULL,
  `GstTax` int(11) NOT NULL,
  `NetAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookroom_tbl`
--

CREATE TABLE `bookroom_tbl` (
  `BookRoomId` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookroom_tbl`
--

INSERT INTO `bookroom_tbl` (`BookRoomId`, `RoomId`, `CustomerId`, `StartDate`, `EndDate`, `Amount`) VALUES
(4, 4, 3, '2019-06-11', '2019-06-14', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `cartitem_tbl`
--

CREATE TABLE `cartitem_tbl` (
  `CartItemId` int(11) NOT NULL,
  `CartId` int(11) NOT NULL,
  `FoodId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartitem_tbl`
--

INSERT INTO `cartitem_tbl` (`CartItemId`, `CartId`, `FoodId`, `Quantity`, `Amount`, `Status`) VALUES
(14, 1, 1, 4, 600, 3),
(15, 6, 7, 2, 400, 0),
(16, 6, 2, 1, 150, 3),
(17, 6, 5, 1, 120, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `CartId` int(11) NOT NULL,
  `TableId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`CartId`, `TableId`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 6),
(8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tbl`
--

CREATE TABLE `contactus_tbl` (
  `Id` int(11) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `C_Email` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus_tbl`
--

INSERT INTO `contactus_tbl` (`Id`, `C_Name`, `C_Email`, `Message`) VALUES
(1, 'maulik', 'sdaf@gmail.com', 'maja');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `CustomerId` int(11) NOT NULL,
  `CName` text NOT NULL,
  `Adults` int(10) NOT NULL,
  `Children` int(10) NOT NULL,
  `EmailId` text NOT NULL,
  `Contact` bigint(11) NOT NULL,
  `Address` text NOT NULL,
  `GstNo` int(11) NOT NULL,
  `ProofType` text NOT NULL,
  `Proof` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`CustomerId`, `CName`, `Adults`, `Children`, `EmailId`, `Contact`, `Address`, `GstNo`, `ProofType`, `Proof`) VALUES
(1, 'maulik', 2, 2, '7bitinfotech@gmail.com', 80007547500, 'dfawd', 9, 'Adhhar Card', 'calendar.jpg'),
(2, 'janak', 3, 3, 'janak@gmail.com', 80007547500, 'dfgas', 23, 'Adhhar Card', 'ac.jpeg'),
(3, 'dilip bhai', 3, 3, 'dilip@gmail.com', 80007547500, 'dfedfasdf', 9, 'Adhhar Card', 'blanket.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dtable_tbl`
--

CREATE TABLE `dtable_tbl` (
  `TableId` int(11) NOT NULL,
  `TName` text NOT NULL,
  `NoOfSeat` int(11) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dtable_tbl`
--

INSERT INTO `dtable_tbl` (`TableId`, `TName`, `NoOfSeat`, `Pass`, `status`) VALUES
(1, 'm1', 20, 'maulik', 1),
(2, 'm2', 10, 'maulik', 0),
(3, 'm3', 5, 'maulik', 0),
(4, 'm4', 20, 'maulik', 0),
(5, 'm5', 10, 'maulik', 0),
(6, 'm6', 15, 'maulik', 1),
(7, 'm7', 20, 'maulik', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facilities_tbl`
--

CREATE TABLE `facilities_tbl` (
  `F_Id` int(11) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `F_Description` varchar(100) NOT NULL,
  `Img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities_tbl`
--

INSERT INTO `facilities_tbl` (`F_Id`, `F_Name`, `F_Description`, `Img`) VALUES
(1, 'AC', 'air conditionar', 'hotelicon.png'),
(2, 'TV', 'HD TV ,   Remote ,  setup box', 'tv.jpeg'),
(3, 'Bed', 'clean bed', 'bed.jpeg'),
(4, 'WI FI SERVICE', 'WIFI', 'icon-wifi.png');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory_tbl`
--

CREATE TABLE `foodcategory_tbl` (
  `FoodCategoryId` int(11) NOT NULL,
  `FName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodcategory_tbl`
--

INSERT INTO `foodcategory_tbl` (`FoodCategoryId`, `FName`) VALUES
(1, 'PANJABI'),
(2, 'PIZZA'),
(3, 'SOUPS'),
(4, 'BREAK FAST'),
(5, 'BURGER & SANDWICHES'),
(6, 'CHINESE');

-- --------------------------------------------------------

--
-- Table structure for table `food_tbll`
--

CREATE TABLE `food_tbll` (
  `FoodId` int(11) NOT NULL,
  `FoodCategoryId` int(11) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_tbll`
--

INSERT INTO `food_tbll` (`FoodId`, `FoodCategoryId`, `FName`, `Price`, `Quantity`, `Description`, `Img`) VALUES
(1, 2, 'full dish', 150, '200', 'tanduri roti,2 sabji,lemon rice,dal fry,papad,chass', 'indiandis.jpeg'),
(2, 2, 'ringan sabji', 150, '150', 'ringan sabji,bajri rotlo,marcha,gud', 'indiandis.jpeg'),
(3, 3, 'burgur', 70, '50', 'chhessy testy burgur', 'burgur.jpeg'),
(4, 3, 'manchuriyan', 120, '100', 'spicy manchuriyan', 'meggi.jpeg'),
(5, 3, 'noodales', 120, '42', 'sweety noodels', 'meggi.jpeg'),
(6, 3, 'chips', 100, '40', 'spice chips', 'chips.jpeg'),
(7, 1, 'Full dish', 200, '200', '2 nan,sabji(kajukari, panir tika ),sweet raytu,sweet chass,papad,mukhvas', 'indiandis.jpeg'),
(8, 5, 'ITALIAN', 345, '1', 'ITALIAN , CORN ,CHILY FLECKS', 'burgur.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `hoteldetail_tbl`
--

CREATE TABLE `hoteldetail_tbl` (
  `id` int(11) NOT NULL,
  `H_Name` varchar(50) NOT NULL,
  `H_Add` varchar(100) NOT NULL,
  `H_MobileNo` int(12) NOT NULL,
  `H_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotelteam_tbl`
--

CREATE TABLE `hotelteam_tbl` (
  `Member_Id` int(10) NOT NULL,
  `MName` varchar(50) NOT NULL,
  `MPost` varchar(50) NOT NULL,
  `M_Description` varchar(100) NOT NULL,
  `Profile_Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `OrderId` int(11) NOT NULL,
  `CartId` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `DateTime` date NOT NULL,
  `ServiceTax` int(11) NOT NULL,
  `GstTax` int(11) NOT NULL,
  `NetAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parsalitem_tbl`
--

CREATE TABLE `parsalitem_tbl` (
  `ParsalId` int(11) NOT NULL,
  `FoodId` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomcartitem_tbl`
--

CREATE TABLE `roomcartitem_tbl` (
  `RoomCartItemId` int(11) NOT NULL,
  `RoomCartId` int(11) NOT NULL,
  `SFId` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomcart_tbl`
--

CREATE TABLE `roomcart_tbl` (
  `RoomCartId` int(11) NOT NULL,
  `RoomId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomcategory_tbl`
--

CREATE TABLE `roomcategory_tbl` (
  `RoomCategoryId` int(11) NOT NULL,
  `RName` text NOT NULL,
  `PricePerDay` int(11) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomcategory_tbl`
--

INSERT INTO `roomcategory_tbl` (`RoomCategoryId`, `RName`, `PricePerDay`, `Img`) VALUES
(1, 'Dilux', 1500, 'our-services1.jpg'),
(2, 'Master Room', 5000, 'our-services2.jpg'),
(3, 'Superior Room', 3000, 'our-services3.jpg'),
(4, 'luxery Room', 4500, 'room-img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_tbl`
--

CREATE TABLE `room_tbl` (
  `RoomId` int(11) NOT NULL,
  `RoomCategoryId` int(11) NOT NULL,
  `RoomNo` text NOT NULL,
  `UserName` text NOT NULL,
  `Pass` text NOT NULL,
  `R_Facilities` varchar(50) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_tbl`
--

INSERT INTO `room_tbl` (`RoomId`, `RoomCategoryId`, `RoomNo`, `UserName`, `Pass`, `R_Facilities`, `Status`) VALUES
(1, 1, 'd1', 'maulik', 'maulik', 'AC,TV,Bed,jaher souchalay', 0),
(2, 1, 'd2', 'maulik', 'maulik', 'AC,TV,Bed', 0),
(3, 1, 'd3', 'maulik', 'maulik', 'AC,TV,Bed', 1),
(4, 2, 'm1', 'maulik', 'maulik', 'AC,TV,Bed', 0),
(5, 2, 'm2', 'maulik', 'maulik', 'Bed', 0),
(6, 4, 'l1', 'maulik', 'maulik', 'TV,Bed,WI FI SERVICE', 0),
(7, 3, 's1', 'maulik', 'maulik', 'TV,Bed,jaher souchalay', 0),
(8, 1, 'd4', 'maulik', 'maulik', 'TV,WI FI SERVICE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_tbl`
--

CREATE TABLE `service_tbl` (
  `ServiceId` int(11) NOT NULL,
  `SName` varchar(50) NOT NULL,
  `S_Price` int(11) NOT NULL,
  `S_Description` varchar(100) NOT NULL,
  `Img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_tbl`
--

INSERT INTO `service_tbl` (`ServiceId`, `SName`, `S_Price`, `S_Description`, `Img`) VALUES
(1, 'londery', 25, 'per jodi', 'lonry.jpeg'),
(2, 'mattress', 20, 'mattress', 'met.jpeg'),
(3, 'blanket', 20, 'blanket', 'blanket.jpeg'),
(4, 'water', 0, 'water', 'water.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `token_tbl`
--

CREATE TABLE `token_tbl` (
  `TokenNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PersonNo` int(11) NOT NULL,
  `Contact_No` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype_tbl`
--

CREATE TABLE `usertype_tbl` (
  `UserTypeId` int(11) NOT NULL,
  `UName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype_tbl`
--

INSERT INTO `usertype_tbl` (`UserTypeId`, `UName`) VALUES
(1, 'cook'),
(2, 'waiter'),
(3, 'reception'),
(4, 'room');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `UserId` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Pass` text NOT NULL,
  `UserTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`UserId`, `UserName`, `Pass`, `UserTypeId`) VALUES
(1, 'maulik', 'maulik', 1),
(2, 'maulik', 'maulik', 2),
(3, 'maulik', 'maulik', 3),
(4, 'maulik', 'maulik', 4),
(5, 'dharmik', 'dharmik', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  ADD PRIMARY KEY (`BillId`),
  ADD KEY `RoomCartId` (`RoomCartId`);

--
-- Indexes for table `bookroom_tbl`
--
ALTER TABLE `bookroom_tbl`
  ADD PRIMARY KEY (`BookRoomId`),
  ADD KEY `RoomId` (`RoomId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `cartitem_tbl`
--
ALTER TABLE `cartitem_tbl`
  ADD PRIMARY KEY (`CartItemId`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `dtable_tbl`
--
ALTER TABLE `dtable_tbl`
  ADD PRIMARY KEY (`TableId`);

--
-- Indexes for table `facilities_tbl`
--
ALTER TABLE `facilities_tbl`
  ADD PRIMARY KEY (`F_Id`);

--
-- Indexes for table `foodcategory_tbl`
--
ALTER TABLE `foodcategory_tbl`
  ADD PRIMARY KEY (`FoodCategoryId`);

--
-- Indexes for table `food_tbll`
--
ALTER TABLE `food_tbll`
  ADD PRIMARY KEY (`FoodId`);

--
-- Indexes for table `hoteldetail_tbl`
--
ALTER TABLE `hoteldetail_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelteam_tbl`
--
ALTER TABLE `hotelteam_tbl`
  ADD PRIMARY KEY (`Member_Id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `parsalitem_tbl`
--
ALTER TABLE `parsalitem_tbl`
  ADD PRIMARY KEY (`ParsalId`);

--
-- Indexes for table `roomcartitem_tbl`
--
ALTER TABLE `roomcartitem_tbl`
  ADD PRIMARY KEY (`RoomCartItemId`);

--
-- Indexes for table `roomcart_tbl`
--
ALTER TABLE `roomcart_tbl`
  ADD PRIMARY KEY (`RoomCartId`);

--
-- Indexes for table `roomcategory_tbl`
--
ALTER TABLE `roomcategory_tbl`
  ADD PRIMARY KEY (`RoomCategoryId`);

--
-- Indexes for table `room_tbl`
--
ALTER TABLE `room_tbl`
  ADD PRIMARY KEY (`RoomId`);

--
-- Indexes for table `service_tbl`
--
ALTER TABLE `service_tbl`
  ADD PRIMARY KEY (`ServiceId`);

--
-- Indexes for table `token_tbl`
--
ALTER TABLE `token_tbl`
  ADD PRIMARY KEY (`TokenNo`);

--
-- Indexes for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  ADD PRIMARY KEY (`UserTypeId`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  MODIFY `BillId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookroom_tbl`
--
ALTER TABLE `bookroom_tbl`
  MODIFY `BookRoomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cartitem_tbl`
--
ALTER TABLE `cartitem_tbl`
  MODIFY `CartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dtable_tbl`
--
ALTER TABLE `dtable_tbl`
  MODIFY `TableId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facilities_tbl`
--
ALTER TABLE `facilities_tbl`
  MODIFY `F_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foodcategory_tbl`
--
ALTER TABLE `foodcategory_tbl`
  MODIFY `FoodCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_tbll`
--
ALTER TABLE `food_tbll`
  MODIFY `FoodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hoteldetail_tbl`
--
ALTER TABLE `hoteldetail_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotelteam_tbl`
--
ALTER TABLE `hotelteam_tbl`
  MODIFY `Member_Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parsalitem_tbl`
--
ALTER TABLE `parsalitem_tbl`
  MODIFY `ParsalId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomcartitem_tbl`
--
ALTER TABLE `roomcartitem_tbl`
  MODIFY `RoomCartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomcart_tbl`
--
ALTER TABLE `roomcart_tbl`
  MODIFY `RoomCartId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomcategory_tbl`
--
ALTER TABLE `roomcategory_tbl`
  MODIFY `RoomCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_tbl`
--
ALTER TABLE `room_tbl`
  MODIFY `RoomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_tbl`
--
ALTER TABLE `service_tbl`
  MODIFY `ServiceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `token_tbl`
--
ALTER TABLE `token_tbl`
  MODIFY `TokenNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype_tbl`
--
ALTER TABLE `usertype_tbl`
  MODIFY `UserTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
