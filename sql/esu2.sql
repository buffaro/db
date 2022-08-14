CREATE TABLE cal_esu2(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
-- Monopolar
-- DESICCATE COAG
    ,M_Coag1_Name VARCHAR(50)
    ,M_Coag1_Load INTEGER(4)
    ,M_Coag1_1 INTEGER(3) DEFAULT '10'
    ,M_Coag1_2 INTEGER(3) DEFAULT '40'
    ,M_Coag1_3 INTEGER(3) DEFAULT '70'
    ,M_Coag1_4 INTEGER(3) DEFAULT '100'
    ,M_Coag1_5 INTEGER(3) DEFAULT '120'
    ,M_Coag1_6 INTEGER(3)

    ,M_Coag1_1_Raw VARCHAR(50)
    ,M_Coag1_2_Raw VARCHAR(50)
    ,M_Coag1_3_Raw VARCHAR(50)
    ,M_Coag1_4_Raw VARCHAR(50)
    ,M_Coag1_5_Raw VARCHAR(50)
    ,M_Coag1_6_Raw VARCHAR(50)

    ,M_Coag1_1_Cal FLOAT(10)
    ,M_Coag1_2_Cal FLOAT(10)
    ,M_Coag1_3_Cal FLOAT(10)
    ,M_Coag1_4_Cal FLOAT(10)
    ,M_Coag1_5_Cal FLOAT(10)
    ,M_Coag1_6_Cal FLOAT(10)

-- FULGURATE COAG
    ,M_Coag2_Name VARCHAR(50)
    ,M_Coag2_Load INTEGER(4)
    ,M_Coag2_1 INTEGER(3) DEFAULT '10'
    ,M_Coag2_2 INTEGER(3) DEFAULT '40'
    ,M_Coag2_3 INTEGER(3) DEFAULT '70'
    ,M_Coag2_4 INTEGER(3) DEFAULT '100'
    ,M_Coag2_5 INTEGER(3) DEFAULT '120'
    ,M_Coag2_6 INTEGER(3)

    ,M_Coag2_1_Raw VARCHAR(50)
    ,M_Coag2_2_Raw VARCHAR(50)
    ,M_Coag2_3_Raw VARCHAR(50)
    ,M_Coag2_4_Raw VARCHAR(50)
    ,M_Coag2_5_Raw VARCHAR(50)
    ,M_Coag2_6_Raw VARCHAR(50)

    ,M_Coag2_1_Cal FLOAT(10)
    ,M_Coag2_2_Cal FLOAT(10)
    ,M_Coag2_3_Cal FLOAT(10)
    ,M_Coag2_4_Cal FLOAT(10)
    ,M_Coag2_5_Cal FLOAT(10)
    ,M_Coag2_6_Cal FLOAT(10)

-- SPRAY COAG
    ,M_Coag3_Name VARCHAR(50)
    ,M_Coag3_Load INTEGER(4)
    ,M_Coag3_1 INTEGER(3) DEFAULT '10'
    ,M_Coag3_2 INTEGER(3) DEFAULT '40'
    ,M_Coag3_3 INTEGER(3) DEFAULT '70'
    ,M_Coag3_4 INTEGER(3) DEFAULT '100'
    ,M_Coag3_5 INTEGER(3) DEFAULT '120'
    ,M_Coag3_6 INTEGER(3)

    ,M_Coag3_1_Raw VARCHAR(50)
    ,M_Coag3_2_Raw VARCHAR(50)
    ,M_Coag3_3_Raw VARCHAR(50)
    ,M_Coag3_4_Raw VARCHAR(50)
    ,M_Coag3_5_Raw VARCHAR(50)
    ,M_Coag3_6_Raw VARCHAR(50)

    ,M_Coag3_1_Cal FLOAT(10)
    ,M_Coag3_2_Cal FLOAT(10)
    ,M_Coag3_3_Cal FLOAT(10)
    ,M_Coag3_4_Cal FLOAT(10)
    ,M_Coag3_5_Cal FLOAT(10)
    ,M_Coag3_6_Cal FLOAT(10)
);