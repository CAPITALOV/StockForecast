// только те тикеры, у которых нет истории И не в skip
WHERE hb.stock_id IS NULL
  AND (sm.history_skip_until IS NULL OR sm.history_skip_until < NOW())
LIMIT 1