INSERT INTO `rights_roles`
  SELECT `rights`.`id`, `roles`.`id`
  FROM `rights`, `roles`
  WHERE `rights`.`module_id` = (SELECT `modules`.`id` FROM `modules` WHERE `modules`.`dir` = 'manager')
        AND `roles`.`name` = 'admin';