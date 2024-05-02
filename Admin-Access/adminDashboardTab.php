<style>
    div .cards {
        max-width: 24rem;
        min-width: 20rem;
        height: 15rem
    }

    .cards {
        transition: transform 0.3s ease-in-out;
    }

    .cards:hover {
        transform: scale(1.05);
        font-weight: bolder;
    }
</style>

<!-- HTML -->

<div>

    <div>
        <h1 class=" bg-dark text-white p-4 m-2">Dashboard</h1>
    </div>
    <div class="container mt-4">
        <fieldset>
            <legend class="w-auto">
                <h3>Project</h3>
            </legend>
            <div class="row mt-2">
                <div class="col">
                    <fieldset>
                        <legend class="w-auto">Applicants</legend>
                        <!-- Add content for Applicants fieldset here -->
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset>
                        <legend class="w-auto">Ongoing</legend>
                        <!-- Add content for Ongoing fieldset here -->
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset>
                        <legend class="w-auto">Completed</legend>
                        <!-- Add content for Completed fieldset here -->
                    </fieldset>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<div id="pieChart">
</div>
<div id="barChart">
</div>
</div>