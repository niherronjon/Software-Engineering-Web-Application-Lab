let temps = [25, 32, 28, 40, 15];

for (const t of temps) {
    if (t >= 30) {
        console.log(`Hot: ${t}`);
    } else {
        console.log(`Cold: ${t}`);
    }
}