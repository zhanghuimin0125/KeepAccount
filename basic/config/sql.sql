//创建消费明细表
CREATE TABLE `finance_detail` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `finance_name` VARCHAR(32) NOT NULL,
    `finance_money` DOUBLE  NOT NULL,
    `create_time` DATETIME NOT NULL,
    PRIMARY KEY (`id`));

    