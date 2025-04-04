import { languages } from "../../src/data/languagesData";

describe("ResumePage", () => {
	beforeEach(() => {
		cy.visit("/resume");
	});

	it("should load the resume page", () => {
		cy.contains("Professional summary").should("be.visible");
		cy.contains("Core Skills").should("be.visible");
		cy.contains("Tech Skills").should("exist");
		cy.contains("Professional Experience").should("exist");
		cy.contains("Education and Certifications").should("exist");
	});

	it("should display the LanguagesSection correctly", () => {
		cy.contains("Language skills").should("exist");
		languages.forEach((language) => {
			cy.contains(`${language.name}: ${language.level}`).should("exist");			
		});
	});
});