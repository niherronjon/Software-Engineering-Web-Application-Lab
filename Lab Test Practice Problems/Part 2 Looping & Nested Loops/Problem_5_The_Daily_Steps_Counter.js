let dailysteps = [5021, 7503, 4987, 10050, 8010, 6500, 7899];
totalsteps = 0;
for (let i = 0; i < dailysteps.length; i++) {
    totalsteps += dailysteps[i];
}
console.log("Total steps for the week: " + totalsteps);