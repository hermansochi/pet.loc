// Base urls
export const url = process.env.REACT_APP_API_URL; // Основной путь
export const version = process.env.REACT_APP_API_VER; // Версия api
export const home = "/"; // Корневая директория
export const healthcheck = "healthcheck"; // Адрес для проверки соеденения
export const orgUsers = "org/users/"; // Директория для запроса пользователей
export const qrcodes = "org/qrcodes/"; // Директория для запроса QR кодов
export const login = "login";
export const events = "events";
export const users = "users";
export const calls = "calls";
export const tvcalls = "tvcalls";

// Headers
export const headers = {
  "Content-Type": "application/json",
  Accept: "application/json",
};
