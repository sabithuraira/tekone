CREATE TABLE IF NOT EXISTS `user` ( 
 `id` int(11) NOT NULL AUTO_INCREMENT, 
 `username` varchar(255), 
 `auth_key` varchar(32) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password_hash` varchar(225) NOT NULL,
 `password_reset_token` varchar(225) NULL,
 `status` smallint(6),
 `created_at` int(11),
 `updated_at` int(11),
 PRIMARY KEY (`id`) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;

CREATE TABLE IF NOT EXISTS `bi` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`kurs` double,
`kursjual` double,
`kursbeli` double,
`kurstengah` double,
`fenomena` text,
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`id_bulanan` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `djbp` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`belanjapegawai` double,
`belanjabarang` double,
`belanjamodal` double,
`belanjabansos` double,
`fenomena` text,
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`id_tw` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `bapeda` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`belanjapegawai` double,
`belanjabarang` double,
`belanjamodal` double,
`belanjabansos` double,
`fenomena` text,
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`id_tw` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `penduduk` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`laki` int(11),
`perempuan` int(11),
`total` int(11),
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `pendudukkerja` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`laki` int(11),
`perempuan` int(11),
`total` int(11),
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `atap` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`padisawah` double,
`padiladang` double,
`padi` double,
`jagung` double,
`kedelai` double,
`kacangtanah` double,
`kacanghijau` double,
`ubikayu` double,
`ubijalar` double,
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `sayurbuahsemusim` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`bawang_merah` double,
`bawang_putih` double,
`bawang_daun` double,
`kentang_` double,
`kubis` double,
`kembang_kol` double,
`petsaisawi` double,
`wortel` double,
`lobak` double,
`kacang_merah` double,
`kacang_panjang` double,
`cabe_besar` double,
`cabe_rawit` double,
`paprika` double,
`jamur` double,
`tomat` double,
`terung` double,
`buncis` double,
`ketimun` double,
`labu_siam` double,
`kangkung` double,
`bayam` double,
`melon` double,
`semangka` double,
`blewah` double,
`lainnya` double,
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `sayurbuahsetahun` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`alpukat` double,
`belimbing` double,
`duku_langsat` double,
`durian` double,
`jambu_biji` double,
`jambu_air` double,
`jeruk_siam_keprok` double,
`jeruk_besar` double,
`mangga` double,
`manggis` double,
`nangka_cempedak` double,
`nenas` double,
`pepaya` double,
`pisang` double,
`rambutan` double,
`salak` double,
`sawo` double,
`markisa_konyal` double,
`sirsak` double,
`sukun` double,
`melinjo` double,
`petai` double,
`jengkol` double,
`lainnya` double,

`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `tanamanbiofarmaka` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`jahe` double,
`laos_lengkuas` double,
`kencur` double,
`kunyit` double,
`lempuyang` double,
`temulawak` double,
`temuireng` double,
`temukunci` double,
`dlingo_dringo` double,
`kapulaga` double,
`mengkudu_pace` double,
`mahkota_dewa` double,
`kejibeling` double,
`sambiloto` double,
`lidah_buaya` double,
`biofarmaka_lainnya` double,
`lainnya` double,

`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `tanamanhias` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`anggrek` double,
`anthurium_bunga` double,
`anyelir` double,
`gerbera_hebras` double,
`gladiol` double,
`heliconia_pisang_pisangan` double,
`krisan` double,
`mawar` double,
`sedap_malam` double,
`dracaena` double,
`melati` double,
`palem` double,
`aglaonema` double,
`adenium_kamboja_jepang` double,
`euphorbia` double,
`phylodendron` double,
`pakis` double,
`monstera` double,
`ixora_soka` double,
`cordyline` double,
`diffenbachia` double,
`sansevieria_pedang_pedangan` double,
`anthurium_daun` double,
`caladium` double,

`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `perkebunansemusim` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`tebu` double,
`jarak_pagar` double,
`kenaf` double,
`kapas` double,
`lainnya` double,
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `perkebunantahunan` ( 
`id` int(11) NOT NULL AUTO_INCREMENT,
`karet` double,
`kelapa_dalam` double,
`kelapa_sawit` double,
`kakao` double,
`lada` double,
`kopi` double,
`cengkeh` double,
`pala` double,
`kemiri` double,
`kayu_manis` double,
`aren` double,
`kapok` double,
`jambu_mete` double,
`panili` double,
`nipah` double,
`pinang` double,
`sagu_` double,
`lainnya` double,
`fenomena` text,
`id_wil` int(11) NOT NULL, 
`id_satuan` int(11) NOT NULL, 
`id_tahun` int(11) NOT NULL,
`created_at` int(11),
`updated_at` int(11),
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `satuan` ( 
`id` int(11) NOT NULL AUTO_INCREMENT, 
`nama` varchar(64) NOT NULL, 
PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tahun` ( 
`id` int(11) NOT NULL, 
`nama` int(4) NOT NULL, 
PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `komoditas` ( 
`id` int(11) NOT NULL AUTO_INCREMENT, 
`komoditas` varchar(64) NOT NULL, 
`id_user` int(11) NOT NULL,
PRIMARY KEY (`id`)
);
