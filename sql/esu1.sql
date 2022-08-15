CREATE TABLE cal_esu1(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Monopolar
-- LOW CUT
    ,M_Cut1_Name VARCHAR(50)
    ,M_Cut1_Load INTEGER(4)
    ,M_Cut1_1 INTEGER(3) DEFAULT '10'
    ,M_Cut1_2 INTEGER(3) DEFAULT '40'
    ,M_Cut1_3 INTEGER(3) DEFAULT '100'
    ,M_Cut1_4 INTEGER(3) DEFAULT '150'
    ,M_Cut1_5 INTEGER(3) DEFAULT '200'
    ,M_Cut1_6 INTEGER(3) DEFAULT '300'

    ,M_Cut1_1_Raw VARCHAR(50)
    ,M_Cut1_2_Raw VARCHAR(50)
    ,M_Cut1_3_Raw VARCHAR(50)
    ,M_Cut1_4_Raw VARCHAR(50)
    ,M_Cut1_5_Raw VARCHAR(50)
    ,M_Cut1_6_Raw VARCHAR(50)

    ,M_Cut1_1_Cal FLOAT(10)
    ,M_Cut1_2_Cal FLOAT(10)
    ,M_Cut1_3_Cal FLOAT(10)
    ,M_Cut1_4_Cal FLOAT(10)
    ,M_Cut1_5_Cal FLOAT(10)
    ,M_Cut1_6_Cal FLOAT(10)

-- PURE CUT
    ,M_Cut2_Name VARCHAR(50)
    ,M_Cut2_Load INTEGER(4)
    ,M_Cut2_1 INTEGER(3) DEFAULT '10'
    ,M_Cut2_2 INTEGER(3) DEFAULT '40'
    ,M_Cut2_3 INTEGER(3) DEFAULT '100'
    ,M_Cut2_4 INTEGER(3) DEFAULT '150'
    ,M_Cut2_5 INTEGER(3) DEFAULT '200'
    ,M_Cut2_6 INTEGER(3) DEFAULT '300'

    ,M_Cut2_1_Raw VARCHAR(50)
    ,M_Cut2_2_Raw VARCHAR(50)
    ,M_Cut2_3_Raw VARCHAR(50)
    ,M_Cut2_4_Raw VARCHAR(50)
    ,M_Cut2_5_Raw VARCHAR(50)
    ,M_Cut2_6_Raw VARCHAR(50)

    ,M_Cut2_1_Cal FLOAT(10)
    ,M_Cut2_2_Cal FLOAT(10)
    ,M_Cut2_3_Cal FLOAT(10)
    ,M_Cut2_4_Cal FLOAT(10)
    ,M_Cut2_5_Cal FLOAT(10)
    ,M_Cut2_6_Cal FLOAT(10)

-- BLEND CUT
    ,M_Cut3_Name VARCHAR(50)
    ,M_Cut3_Load INTEGER(4)
    ,M_Cut3_1 INTEGER(3) DEFAULT '10'
    ,M_Cut3_2 INTEGER(3) DEFAULT '40'
    ,M_Cut3_3 INTEGER(3) DEFAULT '100'
    ,M_Cut3_4 INTEGER(3) DEFAULT '150'
    ,M_Cut3_5 INTEGER(3) DEFAULT '200'
    ,M_Cut3_6 INTEGER(3) DEFAULT '300'

    ,M_Cut3_1_Raw VARCHAR(50)
    ,M_Cut3_2_Raw VARCHAR(50)
    ,M_Cut3_3_Raw VARCHAR(50)
    ,M_Cut3_4_Raw VARCHAR(50)
    ,M_Cut3_5_Raw VARCHAR(50)
    ,M_Cut3_6_Raw VARCHAR(50)

    ,M_Cut3_1_Cal FLOAT(10)
    ,M_Cut3_2_Cal FLOAT(10)
    ,M_Cut3_3_Cal FLOAT(10)
    ,M_Cut3_4_Cal FLOAT(10)
    ,M_Cut3_5_Cal FLOAT(10)
    ,M_Cut3_6_Cal FLOAT(10)

);