--
-- Tablo için tablo yapısı `kisi`
--

CREATE TABLE `kisi` (
  `tckimlikno` bigint(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `cinsiyet` varchar(1) NOT NULL,
  `dogum_tarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo için indeksler `kisi`
--
ALTER TABLE `kisi`
  ADD PRIMARY KEY (`tckimlikno`);
COMMIT;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `tckimlikno` bigint(11) NOT NULL,
  `tur` varchar(3) NOT NULL,
  `telno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`tckimlikno`);
COMMIT;


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sigorta`
--

CREATE TABLE `sigorta` (
  `tckimlikno` bigint(11) NOT NULL,
  `tur` varchar(3) NOT NULL,
  `bas_tar` date NOT NULL,
  `bit_tar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sigorta`
--
ALTER TABLE `sigorta`
  ADD PRIMARY KEY (`tckimlikno`);
COMMIT;