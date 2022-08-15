CREATE TABLE cal_spiro(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Volume
    ,Vol_Unit VARCHAR(50) DEFAULT 'liter'
    ,Vol1 INTEGER(3) DEFAULT '1'
    ,Vol2 INTEGER(3) DEFAULT '2'
    ,Vol3 INTEGER(3) DEFAULT '3'
    ,Vol4 INTEGER(3)
    ,Vol5 INTEGER(3)
    ,Vol6 INTEGER(3)
    ,Vol7 INTEGER(3)
    ,Vol8 INTEGER(3)
    ,Vol9 INTEGER(3)
    ,Vol10 INTEGER(3)
    ,Vol1_Raw VARCHAR(50)
    ,Vol2_Raw VARCHAR(50)
    ,Vol3_Raw VARCHAR(50)
    ,Vol4_Raw VARCHAR(50)
    ,Vol5_Raw VARCHAR(50)
    ,Vol6_Raw VARCHAR(50)
    ,Vol7_Raw VARCHAR(50)
    ,Vol8_Raw VARCHAR(50)
    ,Vol9_Raw VARCHAR(50)
    ,Vol10_Raw VARCHAR(50)
    ,Vol1_Cal FLOAT(10)
    ,Vol2_Cal FLOAT(10)
    ,Vol3_Cal FLOAT(10)
    ,Vol4_Cal FLOAT(10)
    ,Vol5_Cal FLOAT(10)
    ,Vol6_Cal FLOAT(10)
    ,Vol7_Cal FLOAT(10)
    ,Vol8_Cal FLOAT(10)
    ,Vol9_Cal FLOAT(10)
    ,Vol10_Cal FLOAT(10)

);