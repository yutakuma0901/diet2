
CREATE TABLE memos (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) ,
    plans VARCHAR(100),
    scheduled  VARCHAR(100),
    place VARCHAR(100),
    details VARCHAR(1000),
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARACTER SET=utf8mb4;
