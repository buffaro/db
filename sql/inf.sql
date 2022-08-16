CREATE TABLE cal_inf(
    ID INTEGER(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT
    ,Code VARCHAR(20)
    ,Caldate TIMESTAMP
    ,Room_T FLOAT(4)
    ,Room_H FLOAT(4)
-- Infusion/Syringe Pump
    ,IV_Set VARCHAR(50)
    ,Flow_S_1 INTEGER(3)
    ,Flow_S_2 INTEGER(3)
    ,Flow_S_3 INTEGER(3)
    ,Flow_S_4 INTEGER(3)
    ,Flow_R_1 FLOAT(10)
    ,Flow_R_2 FLOAT(10)
    ,Flow_R_3 FLOAT(10)
    ,Flow_R_4 FLOAT(10)
);

