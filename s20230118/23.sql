
--
-- 資料表結構 `students`
--

CREATE TABLE `students23` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(10) NOT NULL,
  `tel` varchar(332) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 新增資料表的資料 `students`
--

INSERT INTO `students23` (`id`, `name`, `age`, `tel`) VALUES
(1, '孫承翰', '20','02-88889999'),
(2, '賴冠延', '30','02-88889999'),
(3, '郭欣妤', '58','02-88889999'),
(4, '謝家豪', '60','02-88889999');

--
-- update `students` key=2
--


UPDATE `students23` SET `age`='55' WHERE id=4;
--
-- del資料 `students` key=3
--
DELETE FROM `students23` WHERE id=3;