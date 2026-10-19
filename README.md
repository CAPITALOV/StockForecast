# KAPITALOV
KAPITALOV.COM
[README.md](https://github.com/user-attachments/files/33672770/README.md)
# StockForecast

Прогнозы и верификация акций MOEX и US. PHP + MySQL.

Три независимые линии прогноза на каждый тикер, автоматическая верификация
с фактической историей цен (до 20 лет), расчёт точности (MAPE, hit-rate),
сравнение тикеров, экспорт CSV, RSI, скользящие средние (SMA/EMA).

---

## 📋 Требования

- PHP 7.4+ с расширениями `pdo_mysql`, `mbstring`
- MySQL 5.7+ / MariaDB 10.3+
- Исходящие HTTP-запросы к `iss.moex.com`, `query1.finance.yahoo.com`, `stooq.com`

## 🚀 Быстрый старт

```bash
# 1. Клонировать
git clone https://github.com/ВАШ_АККАУНТ/stock-forecast.git
cd stock-forecast

# 2. Настроить БД
cp config.example.php config.php
# отредактировать config.php (DB_HOST, DB_NAME, DB_USER, DB_PASS)

# 3. Создать папку для кэша
mkdir -p data
chmod 775 data

# 4. Открыть в браузере
# http://ваш-домен/index.php
# при первом заходе таблицы создадутся автоматически
