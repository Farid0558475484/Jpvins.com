CREATE TABLE `Vegicle-details` (
  `id` int(11) NOT NULL,
  `VIN` varchar(255) NOT NULL,
  `csNumber` varchar(255) NOT NULL,
  `Manifacture` varchar(255) NOT NULL,
  `Make` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Engine` varchar(255) NOT NULL,
  `Emission` varchar(255) NOT NULL,
  `Title2` varchar(255) NOT NULL,
  `AccidentRepair` varchar(255) NOT NULL,
  `Odrollback` varchar(255) NOT NULL,
  `Mrecall` varchar(255) NOT NULL,
  `Safatyg` varchar(255) NOT NULL,
  `Contaminatoin` varchar(255) NOT NULL,
  `Collision` varchar(255) NOT NULL,
  `Malfunction` varchar(255) NOT NULL,
  `Theft` varchar(255) NOT NULL,
  `Fired` varchar(255) NOT NULL,
  `Waterd` varchar(255) NOT NULL,
  `Halld` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `Vegicle-details`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `Vegicle-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;