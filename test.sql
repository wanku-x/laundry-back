/* Общежития */
INSERT INTO `dorms`(`id`, `name`, `time_start`, `time_end`, `created_at`, `updated_at`) VALUES
(NULL, 'Общежитие 1', '00:00:00', '24:00:00', CURRENT_TIME, CURRENT_TIME);
INSERT INTO `dorms`(`id`, `name`, `time_start`, `time_end`, `created_at`, `updated_at`) VALUES
(NULL, 'Общежитие 2', '07:00:00', '22:00:00', CURRENT_TIME, CURRENT_TIME);

/* Этажи Общежития 1 */
INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
), 1, 2, CURRENT_TIME, CURRENT_TIME);

INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
), 2, 2, CURRENT_TIME, CURRENT_TIME);

INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
), 3, 2, CURRENT_TIME, CURRENT_TIME);

/* Этажи Общежития 2 */
INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
), 1, 1, CURRENT_TIME, CURRENT_TIME);

INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
), 2, 1, CURRENT_TIME, CURRENT_TIME);

INSERT INTO `floors`(`id`, `dorm_id`, `number`, `washers`, `created_at`, `updated_at`) VALUES 
(NULL, (
    SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
), 3, 1, CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 1, 1 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '101', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '102', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '103', CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 1, 2 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '201', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '202', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '203', CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 1, 3 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '301', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '302', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 1'
    )), '303', CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 2, 1 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '101', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '102', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 1 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '103', CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 2, 2 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '201', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '202', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 2 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '203', CURRENT_TIME, CURRENT_TIME);

/* Комнаты Общежития 2, 3 этаж */ 
INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '301', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '302', CURRENT_TIME, CURRENT_TIME);

INSERT INTO `rooms`(`id`, `floor_id`, `number`, `created_at`, `updated_at`) VALUES
(NULL, (
    SELECT `id` FROM `floors` WHERE `number` = 3 AND `dorm_id` = 
    (
        SELECT `id` FROM `dorms` WHERE `name` = 'Общежитие 2'
    )), '303', CURRENT_TIME, CURRENT_TIME);