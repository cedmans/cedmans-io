class Musing {
    constructor (title, content, date, updated) {
        this.title = title;
        this.content = content;
        this.date = moment.utc(date);
        this.updated = moment.utc(updated);
    }

    getDate() {
        return this.date.local().format('LLLL');
    }

    getUpdated() {
        return this.updated.local().format('LLLL');
    }

    isUpdated() {
        return this.date.isSame(this.updated);
    }
}

export default Musing
