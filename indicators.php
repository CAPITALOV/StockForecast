function calc_macd(array $bars, int $fast = 12, int $slow = 26, int $signal = 9): array {
    $emaFast = calc_ema($bars, $fast);
    $emaSlow = calc_ema($bars, $slow);
    // ... сведение, signal line ...
    return [['time' => ..., 'value' => ...], ...];
}